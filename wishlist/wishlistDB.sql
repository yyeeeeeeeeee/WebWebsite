-- Creating the database
CREATE DATABASE pawsomeadoptdb CHARACTER SET utf32 COLLATE utf32_general_ci;

-- Creating the tables
USE pawsomeadoptdb;

CREATE TABLE wishlist (
    wishlist_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    petsid INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (petsid) REFERENCES adoptlist(petsid)
);
