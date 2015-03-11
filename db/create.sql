-- Created by Vertabelo (http://vertabelo.com)
-- Script type: create
-- Scope: [tables, references, sequences, views, procedures]
-- Generated at Wed Mar 11 16:12:41 UTC 2015




-- tables
-- Table tbl_products
CREATE TABLE tbl_products (
    prod_id int    NOT NULL  AUTO_INCREMENT,
    part_num varchar(30)    NOT NULL ,
    added_by int    NOT NULL ,
    qty mediumint    NOT NULL ,
    project_id int    NOT NULL ,
    added_on datetime    NOT NULL ,
    CONSTRAINT tbl_products_pk PRIMARY KEY (prod_id)
);

-- Table tbl_projects
CREATE TABLE tbl_projects (
    proj_id int    NOT NULL  AUTO_INCREMENT,
    proj_name varchar(50)    NOT NULL ,
    proj_status int    NOT NULL ,
    updated_by int    NOT NULL ,
    updated_on datetime    NOT NULL ,
    CONSTRAINT tbl_projects_pk PRIMARY KEY (proj_id)
);

-- Table tbl_projstatuses
CREATE TABLE tbl_projstatuses (
    id int    NOT NULL  AUTO_INCREMENT,
    status varchar(20)    NOT NULL ,
    CONSTRAINT tbl_projstatuses_pk PRIMARY KEY (id)
);

-- Table tbl_users
CREATE TABLE tbl_users (
    user_id int    NOT NULL ,
    name varchar(30)    NOT NULL ,
    pwd_hash varchar(50)    NOT NULL ,
    CONSTRAINT tbl_users_pk PRIMARY KEY (user_id)
);





-- foreign keys
-- Reference:  tbl_projects_tbl_products (table: tbl_products)


ALTER TABLE tbl_products ADD CONSTRAINT tbl_projects_tbl_products FOREIGN KEY tbl_projects_tbl_products (project_id)
    REFERENCES tbl_projects (proj_id);
-- Reference:  tbl_statuses_tbl_projects (table: tbl_projects)


ALTER TABLE tbl_projects ADD CONSTRAINT tbl_statuses_tbl_projects FOREIGN KEY tbl_statuses_tbl_projects (proj_status)
    REFERENCES tbl_projstatuses (id);
-- Reference:  tbl_users_tbl_products (table: tbl_products)


ALTER TABLE tbl_products ADD CONSTRAINT tbl_users_tbl_products FOREIGN KEY tbl_users_tbl_products (added_by)
    REFERENCES tbl_users (user_id);
-- Reference:  tbl_users_tbl_projects (table: tbl_projects)


ALTER TABLE tbl_projects ADD CONSTRAINT tbl_users_tbl_projects FOREIGN KEY tbl_users_tbl_projects (updated_by)
    REFERENCES tbl_users (user_id);



-- End of file.

