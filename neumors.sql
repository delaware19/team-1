--
-- PostgreSQL database dump
--

-- Dumped from database version 11.5
-- Dumped by pg_dump version 11.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: hello; Type: TABLE; Schema: public; Owner: frodo
--

CREATE TABLE public.hello (
    h_id integer NOT NULL,
    h_text character varying(128)
);


ALTER TABLE public.hello OWNER TO frodo;

--
-- Name: hello_h_id_seq; Type: SEQUENCE; Schema: public; Owner: frodo
--

CREATE SEQUENCE public.hello_h_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hello_h_id_seq OWNER TO frodo;

--
-- Name: hello_h_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: frodo
--

ALTER SEQUENCE public.hello_h_id_seq OWNED BY public.hello.h_id;


--
-- Name: hello h_id; Type: DEFAULT; Schema: public; Owner: frodo
--

ALTER TABLE ONLY public.hello ALTER COLUMN h_id SET DEFAULT nextval('public.hello_h_id_seq'::regclass);


--
-- Data for Name: hello; Type: TABLE DATA; Schema: public; Owner: frodo
--

COPY public.hello (h_id, h_text) FROM stdin;
1	Hello, world!
\.


--
-- Name: hello_h_id_seq; Type: SEQUENCE SET; Schema: public; Owner: frodo
--

SELECT pg_catalog.setval('public.hello_h_id_seq', 1, true);


--
-- Name: hello hello_pkey; Type: CONSTRAINT; Schema: public; Owner: frodo
--

ALTER TABLE ONLY public.hello
    ADD CONSTRAINT hello_pkey PRIMARY KEY (h_id);


--
-- PostgreSQL database dump complete
--

