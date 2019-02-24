--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-02-23 22:53:13

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 16669)
-- Name: author; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.author (
    author_id integer NOT NULL,
    first_name character varying(50) NOT NULL,
    middle_name character varying(50),
    last_name character varying(50) NOT NULL
);


ALTER TABLE public.author OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 16667)
-- Name: author_author_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.author_author_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.author_author_id_seq OWNER TO postgres;

--
-- TOC entry 2879 (class 0 OID 0)
-- Dependencies: 196
-- Name: author_author_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.author_author_id_seq OWNED BY public.author.author_id;


--
-- TOC entry 205 (class 1259 OID 16712)
-- Name: book; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.book (
    book_id integer NOT NULL,
    author_id integer NOT NULL,
    genre_id integer NOT NULL,
    format_id integer NOT NULL,
    is_series boolean NOT NULL,
    series_id integer NOT NULL,
    number_in_series integer,
    title character varying(50) NOT NULL,
    isbn character varying(50),
    pages smallint,
    copyright smallint,
    description character varying(1000)
);


ALTER TABLE public.book OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16710)
-- Name: book_book_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.book_book_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.book_book_id_seq OWNER TO postgres;

--
-- TOC entry 2880 (class 0 OID 0)
-- Dependencies: 204
-- Name: book_book_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.book_book_id_seq OWNED BY public.book.book_id;


--
-- TOC entry 203 (class 1259 OID 16704)
-- Name: format; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.format (
    format_id integer NOT NULL,
    format character varying(50) NOT NULL
);


ALTER TABLE public.format OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16702)
-- Name: format_format_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.format_format_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.format_format_id_seq OWNER TO postgres;

--
-- TOC entry 2881 (class 0 OID 0)
-- Dependencies: 202
-- Name: format_format_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.format_format_id_seq OWNED BY public.format.format_id;


--
-- TOC entry 201 (class 1259 OID 16693)
-- Name: genre; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.genre (
    genre_id integer NOT NULL,
    genre character varying(100),
    description character varying(1000)
);


ALTER TABLE public.genre OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 16691)
-- Name: genre_genre_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.genre_genre_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.genre_genre_id_seq OWNER TO postgres;

--
-- TOC entry 2882 (class 0 OID 0)
-- Dependencies: 200
-- Name: genre_genre_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.genre_genre_id_seq OWNED BY public.genre.genre_id;


--
-- TOC entry 207 (class 1259 OID 24742)
-- Name: login; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.login (
    id integer NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(255) NOT NULL
);


ALTER TABLE public.login OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 24740)
-- Name: login_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.login_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.login_id_seq OWNER TO postgres;

--
-- TOC entry 2883 (class 0 OID 0)
-- Dependencies: 206
-- Name: login_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.login_id_seq OWNED BY public.login.id;


--
-- TOC entry 199 (class 1259 OID 16677)
-- Name: series; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.series (
    series_id integer NOT NULL,
    author_id integer NOT NULL,
    series character varying(100),
    description character varying(1000)
);


ALTER TABLE public.series OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 16675)
-- Name: series_series_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.series_series_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.series_series_id_seq OWNER TO postgres;

--
-- TOC entry 2884 (class 0 OID 0)
-- Dependencies: 198
-- Name: series_series_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.series_series_id_seq OWNED BY public.series.series_id;


--
-- TOC entry 2718 (class 2604 OID 16672)
-- Name: author author_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.author ALTER COLUMN author_id SET DEFAULT nextval('public.author_author_id_seq'::regclass);


--
-- TOC entry 2722 (class 2604 OID 16715)
-- Name: book book_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book ALTER COLUMN book_id SET DEFAULT nextval('public.book_book_id_seq'::regclass);


--
-- TOC entry 2721 (class 2604 OID 16707)
-- Name: format format_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.format ALTER COLUMN format_id SET DEFAULT nextval('public.format_format_id_seq'::regclass);


--
-- TOC entry 2720 (class 2604 OID 16696)
-- Name: genre genre_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genre ALTER COLUMN genre_id SET DEFAULT nextval('public.genre_genre_id_seq'::regclass);


--
-- TOC entry 2723 (class 2604 OID 24745)
-- Name: login id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.login ALTER COLUMN id SET DEFAULT nextval('public.login_id_seq'::regclass);


--
-- TOC entry 2719 (class 2604 OID 16680)
-- Name: series series_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.series ALTER COLUMN series_id SET DEFAULT nextval('public.series_series_id_seq'::regclass);


--
-- TOC entry 2863 (class 0 OID 16669)
-- Dependencies: 197
-- Data for Name: author; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.author (author_id, first_name, middle_name, last_name) FROM stdin;
1	Lee	\N	Child
2	Warren	\N	Murphy
3	David	\N	Eddings
4	Jim	\N	Butcher
5	Clive	\N	Cussler
6	Tom	\N	Wood
7	Mark	\N	Greaney
8	W.E.B	\N	Griffin
9	Robert	\N	Ludlum
10	Brad	\N	Thor
11	Benedict	\N	Jacka
\.


--
-- TOC entry 2871 (class 0 OID 16712)
-- Dependencies: 205
-- Data for Name: book; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.book (book_id, author_id, genre_id, format_id, is_series, series_id, number_in_series, title, isbn, pages, copyright, description) FROM stdin;
1	10	5	3	t	14	1	The Lions of Lucerne	\N	\N	\N	\N
2	10	5	3	t	14	2	Path of the Assassin	\N	\N	\N	\N
3	10	5	3	t	14	3	Path of the Assassin	\N	\N	\N	\N
4	10	5	3	t	14	3	Path of the Assassin	\N	\N	\N	\N
5	10	5	3	t	14	4	Blow Back	\N	\N	\N	\N
6	10	5	3	t	14	5	Takedown	\N	\N	\N	\N
7	10	5	3	t	14	6	The First Commandment	\N	\N	\N	\N
8	11	7	3	t	15	1	Fated	\N	\N	\N	\N
9	11	7	3	t	15	2	Cursed	\N	\N	\N	\N
10	11	7	3	t	15	3	Taken	\N	\N	\N	\N
11	11	7	3	t	15	4	Chosen	\N	\N	\N	\N
12	11	7	3	t	15	5	Hidden	\N	\N	\N	\N
13	11	7	3	t	15	6	Veiled	\N	\N	\N	\N
14	11	7	3	t	15	7	Burned	\N	\N	\N	\N
15	11	7	3	t	15	8	Bouned	\N	\N	\N	\N
\.


--
-- TOC entry 2869 (class 0 OID 16704)
-- Dependencies: 203
-- Data for Name: format; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.format (format_id, format) FROM stdin;
1	Audio Book
2	eBook
3	Paperback
4	Hard Cover
\.


--
-- TOC entry 2867 (class 0 OID 16693)
-- Dependencies: 201
-- Data for Name: genre; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.genre (genre_id, genre, description) FROM stdin;
1	Children's Books	\N
2	Comics & Graphic Novels	\N
3	Computers & Technology	\N
4	Humor & Entertainment	\N
5	Mystery, Thriller & Suspense	\N
6	Religion & Spirituality	\N
7	Science Fiction & Fantasy	\N
\.


--
-- TOC entry 2873 (class 0 OID 24742)
-- Dependencies: 207
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.login (id, username, password) FROM stdin;
35	admin	$2y$10$RzZz18Qo4gpO6w59YUAkduqjwqH6oZeRLE4dHlTH9t7580Avj1tT2
\.


--
-- TOC entry 2865 (class 0 OID 16677)
-- Dependencies: 199
-- Data for Name: series; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.series (series_id, author_id, series, description) FROM stdin;
1	1	Jack Reacher	\N
2	2	The Destroyer	\N
3	3	The Belgariad	\N
4	3	The Mallorean	\N
5	3	The Tamuli	\N
6	3	The Elenium	\N
7	4	Dresden Files	\N
8	4	Codex Alera	\N
9	5	Dirk Pit	\N
10	6	Victor the Assassin	\N
11	7	The Grey Man	\N
12	8	Presidential Agent Novel	\N
13	9	Jason Bourne	\N
14	10	Scot Hartvath	\N
15	11	Alex Verus	\N
\.


--
-- TOC entry 2885 (class 0 OID 0)
-- Dependencies: 196
-- Name: author_author_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.author_author_id_seq', 11, true);


--
-- TOC entry 2886 (class 0 OID 0)
-- Dependencies: 204
-- Name: book_book_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.book_book_id_seq', 15, true);


--
-- TOC entry 2887 (class 0 OID 0)
-- Dependencies: 202
-- Name: format_format_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.format_format_id_seq', 4, true);


--
-- TOC entry 2888 (class 0 OID 0)
-- Dependencies: 200
-- Name: genre_genre_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.genre_genre_id_seq', 7, true);


--
-- TOC entry 2889 (class 0 OID 0)
-- Dependencies: 206
-- Name: login_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.login_id_seq', 35, true);


--
-- TOC entry 2890 (class 0 OID 0)
-- Dependencies: 198
-- Name: series_series_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.series_series_id_seq', 15, true);


--
-- TOC entry 2725 (class 2606 OID 16674)
-- Name: author author_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.author
    ADD CONSTRAINT author_pkey PRIMARY KEY (author_id);


--
-- TOC entry 2733 (class 2606 OID 16720)
-- Name: book book_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book
    ADD CONSTRAINT book_pkey PRIMARY KEY (book_id);


--
-- TOC entry 2731 (class 2606 OID 16709)
-- Name: format format_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.format
    ADD CONSTRAINT format_pkey PRIMARY KEY (format_id);


--
-- TOC entry 2729 (class 2606 OID 16701)
-- Name: genre genre_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.genre
    ADD CONSTRAINT genre_pkey PRIMARY KEY (genre_id);


--
-- TOC entry 2735 (class 2606 OID 24747)
-- Name: login login_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (id);


--
-- TOC entry 2727 (class 2606 OID 16685)
-- Name: series series_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.series
    ADD CONSTRAINT series_pkey PRIMARY KEY (series_id);


--
-- TOC entry 2737 (class 2606 OID 16721)
-- Name: book book_author_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book
    ADD CONSTRAINT book_author_id_fkey FOREIGN KEY (author_id) REFERENCES public.author(author_id);


--
-- TOC entry 2739 (class 2606 OID 16731)
-- Name: book book_format_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book
    ADD CONSTRAINT book_format_id_fkey FOREIGN KEY (format_id) REFERENCES public.format(format_id);


--
-- TOC entry 2738 (class 2606 OID 16726)
-- Name: book book_genre_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book
    ADD CONSTRAINT book_genre_id_fkey FOREIGN KEY (genre_id) REFERENCES public.genre(genre_id);


--
-- TOC entry 2740 (class 2606 OID 16736)
-- Name: book book_series_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.book
    ADD CONSTRAINT book_series_id_fkey FOREIGN KEY (series_id) REFERENCES public.series(series_id);


--
-- TOC entry 2736 (class 2606 OID 16686)
-- Name: series series_author_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.series
    ADD CONSTRAINT series_author_id_fkey FOREIGN KEY (author_id) REFERENCES public.author(author_id);


-- Completed on 2019-02-23 22:53:13

--
-- PostgreSQL database dump complete
--

