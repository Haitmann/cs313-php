var express = require("express");
const path = require('path');
var router = express.Router();
var app = express();
var url = require('url');
var session = require('express-session');
var bodyParser = require('body-parser');
var bcrypt = require('bcrypt');
const mustacheExpress = require('mustache-express');
const saltRounds = 10;

const mustache = mustacheExpress();
mustache.cache = null;
app.engine('mustache', mustache);

// Using Mustache for Templates
app.set('view engine', 'mustache');

const { Pool } = require("pg");

const connectionString = process.env.DATABASE_URL || "postgres://tzxidnioipqkli:a0c32ea6f80b6d98f9e01715e60707dc0d908d5dd462ce1973fd59247299acdd@ec2-184-73-216-48.compute-1.amazonaws.com:5432/daf5qrkcfm21b5?ssl=true";
const pool = new Pool({connectionString: connectionString});


app.set("port", (process.env.PORT || 5000));
app.use(bodyParser.urlencoded({extended: false }));

app.get('/form', (req, res) => {
    res.render('signUp');
});

app.post('/user/add', (req, res) => {
    console.log('post body', req.body);
    
    var sql = 'INSERT INTO users (username) VALUES ($1)';
    var params = [req.body.username];

//    if(req.body.username) {
    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
        }
        else {
        console.log("Inserted Username: " + JSON.stringify(result));
            res.redirect('/main');
        }
    });
//    }
//    else {
//       console.log("empty body");
//    }
    
    
//    res.redirect('/main');
    
});

// Just practicing creating a route and rendering a mustache template.
app.get('/main', (req, res) => {
    res.render('index');
});

function isLoggedIn( req, res, next ) {
   console.log("trying restricted file");
   next();
}

app.use('/', isLoggedIn, express.static(path.join(__dirname, 'public')));


app.get("/getWorldCupCountry", getWorldCupCountry)
app.get("/getWorldCupChampions", getWorldCupChampions)
app.get("/getWorldCupTeams", getWorldCupTeams)
app.get("/getWorldCupDetails", getWorldCupDetails)

app.get("/getWorldCupMatchDetails", getWorldCupMatchDetails)

app.listen(app.get("port"), function() {
    console.log("Now listening for connections on port: ", app.get("port"));
});

function getWorldCupCountry(req, res) {
    console.log("Getting World Cup Country.");

    var result = {id: 2, country: "Russia", year: "1984"};

    var id = req.query.id;
    console.log("Retrieving World Cup with id: ", id);


    getWorldCupCountryFromDb(id, function(error, result) {
        console.log("Got data back from DB with result:", result);
        if (error || result == null || result.length != 1) {
            res.status(500).json({success:false, data: error});
        } else {
            res.json(result[0]);
        }
    });
}

function getWorldCupCountryFromDb(id, callback) {
    console.log("getting country from DB with id ", id);

    var sql = "SELECT country FROM worldcup WHERE id = $1::int";
    var params = [id];

    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
            callback(err, null);
        }
        console.log("Found Db result: " + JSON.stringify(result.rows));

        callback(null, result.rows);
    });

}

function getWorldCupChampions(req, res) {
    console.log("Getting World Champions");

    var year = req.query.year;
    console.log("Retrieving World Cup champion for year: ", year);


    getWorldCupChampionsFromDb(year, function(error, result) {
        console.log("Got data back from DB with result:", result);
        if (error || result == null || result.length != 1) {
            res.status(500).json({success:false, data: error});
        } else {
            res.json(result[0]);
        }
    });
}

function getWorldCupChampionsFromDb(year, callback) {
    console.log("getting champion from DB with year ", year);

    var sql = "SELECT year, champion FROM worldcup WHERE year = $1::int";
    var params = [year];

    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
            callback(err, null);
        }
        console.log("Found Db result: " + JSON.stringify(result.rows));

        callback(null, result.rows);
    });
}

function getWorldCupTeams(req, res) {
    console.log("Getting World Champions");

    var year = req.query.year;
    console.log("Retrieving World Cup champion for year: ", year);


    getWorldCupTeamsFromDb(year, function(error, result) {
        console.log("Got data back from DB with result:", result);
        if (error || result == null) {
            res.status(500).json({success:false, data: error});
        } else {
            res.json(result);
        }
    });
}
function getWorldCupTeamsFromDb(year, callback) {
    console.log("getting champion from DB with year ", year);

    var sql = "SELECT team.name FROM team INNER JOIN worldcup ON team.worldcup = worldcup.id AND worldcup.year = $1::int";
    var params = [year];

    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
            callback(err, null);
        }
        console.log("Found Db result: " + JSON.stringify(result.rows));

        callback(null, result.rows);
    });
}

function getWorldCupDetails(req, res) {
    console.log("Getting World Details");

    var year = req.query.year;
    console.log("Retrieving World Cup Details for year: ", year);
    
    var result = [{runner_up_code: 
                   "URU", champion_code: "ARG", champion: "Uruguay", runner_up: "Argentina", champion_score: 3, runner_up_score: 1}];


    getWorldCupDetailsFromDb(year, function(error, result) {
        console.log("Got data back from DB with result:", result);
        if (error || result == null) {
            res.status(500).json({success:false, data: error});
        } else {
            res.json(result);
        }
    });
}
function getWorldCupDetailsFromDb(year, callback) {
    console.log("getting Details from DB with year ", year);
   
    var sql = "SELECT country, year, champion, runner_up, champion_code, runner_up_code, champion_score, runner_up_score, champion_penalties, runner_up_penalties FROM worldcup WHERE year = $1::int";
    var params = [year];

    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
            callback(err, null);
        }
        console.log("Found Db result: " + JSON.stringify(result.rows));

        callback(null, result.rows);
    });
}

function getWorldCupMatchDetails(req, res) {
    console.log("Getting Match Details");

    var year = req.query.year;
    console.log("Retrieving Match Details for year: ", year);
    
    getWorldCupMatchDetailsFromDb(year, function(error, result) {
        console.log("Got data back from DB with result:", result);
        if (error || result == null) {
            res.status(500).json({success:false, data: error});
        } else {
            res.json(result);
        }
    });
}
function getWorldCupMatchDetailsFromDb(year, callback) {
    console.log("getting Details from DB with year ", year);
       
    var sql = "SELECT wc_year, match_type, home_team_flag, away_team_flag, home_team, away_team, home_team_goals, away_team_goals, home_team_penalties, away_team_penalties FROM matches WHERE wc_year = $1::int";
    var params = [year];

    pool.query(sql, params, function(err, result){
        if (err) {
            console.log("An error occurred with the DB");
            console.log(err);
            callback(err, null);
        }
        console.log("Found Db result: " + JSON.stringify(result.rows));

        callback(null, result.rows);
    });
}