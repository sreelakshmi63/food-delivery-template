
create database foodtopia;
use foodtopia;

CREATE TABLE IF NOT EXISTS users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    mobile VARCHAR(10) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS fourcategories (
    content_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    image VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    vegnon VARCHAR(5) NOT NULL,
    resto VARCHAR(50) NOT NULL,
    cost INT(10) NOT NULL,
    description VARCHAR(500) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/dinner991.png", 
	"Butter Chicken With Butter Naan", 
	"nveg",
	"Maa Di Hatti",
	"89",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/dinner992.png", 
	"Rice With Egg Curry Combo", 
	"nveg",
	"Biriyani Pot",
	"79",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/dinner993.png", 
	"Classic Veggie Burger", 
	"veg",
	"Leon Grill ",
	"60",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/dinner994.png", 
	"Pilaf Paneer Meal", 
	"veg",
	"California Burrito",
	"99",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/pizza1.png", 
	"2 Pizzas at ₹299 each", 
	"veg",
	"Greenwich Pizza",
	"299",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/pizza2.png", 
	"Hot Dog Pizza", 
	"nveg",
	"Pizza Hut",
	"799",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/pizza3.png", 
	"Philly Cheese Steak Pizza", 
	"veg",
	"Dominos",
	"649",
	"bla bla bla");
INSERT into fourcategories (image, name, vegnon, resto, cost, description) 
VALUES ("Resources/Image/fourcategory/pizza4.png", 
	"Lemon Cilantro Chicken Pizza", 
	"nveg",
	"Onesta",
	"599",
	"bla bla bla");

	UPDATE fourcategories
	SET 
		description='Topped with cilantro leaves, lemon cream sauce, arugula, and lemon slices. This will have all cilantro lime lovers falling in love with this simple, but tasty pizza'
	WHERE
		content_id=5;

