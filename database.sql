Database_Name = "job_lister"

CREATE TABLE `categories` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4


CREATE TABLE `jobs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `category_id` int(11) DEFAULT NULL,
 `company` varchar(255) NOT NULL,
 `job_title` varchar(255) NOT NULL,
 `salary` varchar(255) NOT NULL,
 `description` varchar(255) NOT NULL,
 `location` varchar(255) NOT NULL,
 `contact_user` varchar(255) NOT NULL,
 `contact_email` varchar(255) NOT NULL,
 `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4