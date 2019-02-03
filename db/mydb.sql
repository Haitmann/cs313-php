CREATE TABLE dim_users (
    user_id SERIAL NOT NULL PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL UNIQUE,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    passwrd VARCHAR(100) NOT NULL
);

CREATE TABLE dim_products (
    product_id SERIAL NOT NULL PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_desc VARCHAR(100) NOT NULL,
    product_category VARCHAR(100) NOT NULL,
    product_sub_categ VARCHAR(100) NOT NULL,
    product_aff_link TEXT

);

CREATE TABLE ft_reviews (
    review_id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES dim_users(user_id),
    product_id INT NOT NULL REFERENCES dim_products(product_id),
    review_msg VARCHAR(1500) NOT NULL,
    review_date TIMESTAMP
);

