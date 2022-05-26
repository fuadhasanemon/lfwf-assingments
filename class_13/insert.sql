-- User table

-- Single value input

INSERT INTO user_information (id, username, age, phone, address, created_at, updated_at)
VALUES ('John', '26', '01647335376', 'Dhaka BD', '22-11-2022 6:18:41', '12-12-2022 8:19:41');

-- Multiple value

INSERT INTO user_information (id, username, age, phone, address, created_at, updated_at)
VALUES ('Fuad', '27', '01647335374', 'Dhaka BD', '18-10-2022 9:18:42', '12-12-2022 8:20:41'),
VALUES ('Hasan', '24', '01647335373', 'Selhet BD', '12-11-2022 6:18:00', '12-12-2022 9:19:41'),
VALUES ('Emon', '25', '01647335375', 'Rangpur BD', '20-12-2021 3:16:41', '12-12-2022 8:12:41');



-- Product table

-- Single value input

INSERT INTO product_table (id, post_title, post_details, post_file, created_at, updated_at, deleted_at)
VALUES ('It is a long established fact', 'There are many variations of passages of Lorem Ipsum available, but the majority', 'Photo.png', '18-10-2022 9:18:42', '12-12-2022 8:20:41', '0-11-2022 8:10:41');

-- Multiple value

INSERT INTO product_table (id, post_title, post_details, post_file, created_at, updated_at, deleted_at)
VALUES ('It is a long established fact', 'There are many variations of passages of Lorem Ipsum available, but the majority', 'Photo.png', '18-10-2022 9:18:42', '12-12-2022 8:20:41', '0-11-2022 8:10:41'),
VALUES ('It is a long established fact', 'There are many variations of passages of Lorem Ipsum available, but the majority', 'Photo.png', '18-10-2022 9:18:42', '12-12-2022 8:20:41', '0-11-2022 8:10:41');



-- Comments table

-- Single value input

INSERT INTO comments_table (id, post_id, comment, created_at, updated_at, deleted_at)
VALUES ('12', 'This is cool', '18-10-2022 9:18:42', '12-12-2022 8:20:41', '0-11-2022 8:10:41');

-- Multiple value

INSERT INTO comments_table (id, post_id, comment, created_at, updated_at, deleted_at)
VALUES ('12', 'This is cool', '18-10-2022 9:18:42', '12-12-2022 8:20:41', '0-11-2022 8:10:41'),
VALUES ('12', 'This is awesome', '8-12-2022 12:11:32', '11-12-2022 8:20:41', '12-11-2022 8:20:31');