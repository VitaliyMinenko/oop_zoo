-- Create table authors
CREATE TABLE authors
(
    id         SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name  VARCHAR(50) NOT NULL
);

-- Create table books
CREATE TABLE books
(
    id               SERIAL PRIMARY KEY,
    title            VARCHAR(255)       NOT NULL,
    publication_year INT                NOT NULL,
    isbn             VARCHAR(13) UNIQUE NOT NULL,
    author_id        INT                NOT NULL,
    FOREIGN KEY (author_id) REFERENCES authors (id) ON DELETE CASCADE
);

-- Create table reviews
CREATE TABLE reviews
(
    id      SERIAL PRIMARY KEY,
    rating  INT CHECK (rating BETWEEN 1 AND 10) NOT NULL,
    content TEXT                                NOT NULL,
    book_id INT                                 NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books (id) ON DELETE CASCADE
);