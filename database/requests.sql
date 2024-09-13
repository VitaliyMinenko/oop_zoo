-- Select names pf authors with count of books
SELECT a.first_name,
       a.last_name,
       COUNT(b.id) AS books_count
FROM authors a
         LEFT JOIN
     books b ON a.id = b.author_id
GROUP BY a.first_name, a.last_name
ORDER BY books_count DESC;

-- Create View with Authors with most count of books
CREATE VIEW top_authors AS
SELECT a.first_name,
       a.last_name,
       AVG(r.rating) AS average_rating
FROM authors a
         JOIN
     books b ON a.id = b.author_id
         JOIN
     reviews r ON b.id = r.book_id
GROUP BY a.id, a.first_name, a.last_name
ORDER BY average_rating DESC LIMIT 5;