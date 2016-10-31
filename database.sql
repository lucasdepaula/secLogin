CREATE TABLE users
(
  id serial NOT NULL,
  username character varying(10) NOT NULL,
  email text NOT NULL,
  password character varying(64) NOT NULL,
  password_salt character varying(20) NOT NULL,
  name character varying(30) NOT NULL,
  created timestamp without time zone NOT NULL,
  attempt character varying(15) NOT NULL DEFAULT '0'::character varying,
  CONSTRAINT users_pkey PRIMARY KEY (id )
)
