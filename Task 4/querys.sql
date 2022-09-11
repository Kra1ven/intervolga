--MySQL

CREATE TABLE Contesters (
		contester_id int primary key NOT NULL,
		full_name varchar(50) NOT NULL,
		email varchar(50) NOT NULL UNIQUE,
		phone_num varchar(12) NOT NULL UNIQUE,
		birthday date NOT NULL,
		age tinyint NOT NULL,
		datetime_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
		passport_num bigint NOT NULL UNIQUE,
		median_res tinyint NOT NULL,
		bio varchar(200) NOT NULL,
		presentation_vid varchar(50) NOT NULL,
		CONSTRAINT full_name_cc CHECK (full_name REGEXP '^[а-яА-ЯёЁa-zA-Z]+ [а-яА-ЯёЁa-zA-Z]+ ?[а-яА-ЯёЁa-zA-Z]+$'),
		CONSTRAINT email_cc CHECK (email REGEXP '^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$'),
		CONSTRAINT phone_num_cc CHECK (phone_num REGEXP '^((\+7|7|8)+([0-9]){10})$')
  );
  
  SELECT full_name FROM Results, Contesters WHERE Results.contester_id = Contesters.contester_id GROUp BY contester_id ORDER BY count(*) DESC LIMIT 5;