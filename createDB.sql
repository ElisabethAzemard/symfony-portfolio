DROP DATABASE IF EXISTS symfony_portfolio;
CREATE DATABASE symfony_portfolio;
USE symfony_portfolio;

CREATE TABLE comments (
  comment_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  comment_content VARCHAR(1000) NOT NULL,
  comment_author VARCHAR(200),
  comment_author_email VARCHAR(200)
)ENGINE = innoDB;

CREATE TABLE posts (
  post_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_comment_id INTEGER,
  FOREIGN KEY (fk_comment_id) REFERENCES comments(comment_id),
  post_status VARCHAR(20) NOT NULL DEFAULT 'published',
  post_date_created DATETIME NOT NULL,
  post_date_updated DATETIME,
  post_title VARCHAR(100) NOT NULL,
  post_content TEXT,
  post_cover VARCHAR(200),
  post_excerpt VARCHAR(300),
  post_comment_open BOOLEAN NOT NULL,
  post_comment_count INTEGER
)ENGINE = innoDB;

CREATE TABLE members (
  member_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_comment_id INTEGER,
  FOREIGN KEY (fk_comment_id) REFERENCES comments(comment_id),
    fk_post_id INTEGER,
  FOREIGN KEY (fk_post_id) REFERENCES posts(post_id),
  member_username VARCHAR(100) NOT NULL,
  member_email VARCHAR(100) NOT NULL,
  member_password VARCHAR(20),
  member_avatar VARCHAR(300),
  member_role INTEGER,
  member_description VARCHAR(1000),
  member_about VARCHAR(5000),
  CONSTRAINT uc_username_email UNIQUE (member_username , member_email)
)ENGINE = innoDB;

CREATE TABLE categories (
  category_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR(100) NOT NULL UNIQUE,
  category_description VARCHAR(500),
  category_cover VARCHAR(300) NOT NULL
)ENGINE = innoDB;

CREATE TABLE rel_posts_categories (
  rel_post_category_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_post_id INTEGER,
  FOREIGN KEY (fk_post_id) REFERENCES posts(post_id),
    fk_category_id INTEGER,
  FOREIGN KEY (fk_category_id) REFERENCES categories(category_id)
)ENGINE = innoDB;

CREATE TABLE tags (
  tag_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tag_name VARCHAR(25) NOT NULL UNIQUE
)ENGINE = innoDB;

CREATE TABLE rel_posts_tags (
  rel_post_tag_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_tag_id INTEGER,
  FOREIGN KEY (fk_tag_id) REFERENCES tags(tag_id),
    fk_post_id INTEGER,
  FOREIGN KEY (fk_post_id) REFERENCES posts(post_id)
)ENGINE = innoDB;

CREATE TABLE form_entries (
  form_entry_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  form_entry_first_name VARCHAR(200),
  form_entry_last_name VARCHAR(200),
  form_entry_email VARCHAR(200),
  form_entry_subject VARCHAR(200),
  form_entry_message VARCHAR(2000)
)ENGINE = innoDB;