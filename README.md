CREATE TABLE users ( 
    user_id INT UNSIGNED AUTO_INCREMENT ,
    user_name VARCHAR(30) NOT NULL,
    user_surname VARCHAR(30) NOT NULL, 
    user_username VARCHAR(30) NOT NULL,
    user_password VARCHAR(30) NOT NULL, 
    PRIMARY KEY (user_id)
)

CREATE TABLE skills ( 
    skill_id INT UNSIGNED AUTO_INCREMENT ,
    user_id INT UNSIGNED,
    skill_name VARCHAR(50) NOT NULL, 
    skill_level VARCHAR(50) NOT NULL,
    skill_experience VARCHAR(50) NOT NULL,
    PRIMARY KEY (skill_id),
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    
)


CREATE TABLE addresses ( 
    address_id INT UNSIGNED AUTO_INCREMENT ,
    user_id INT UNSIGNED,
    country VARCHAR(50) NOT NULL, 
    city VARCHAR(50) NOT NULL,
    street VARCHAR(50) NOT NULL,
    building_no INT UNSIGNED NOT NULL,
    PRIMARY KEY (address_id),
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    
)
CREATE TABLE education ( 
    education_id INT UNSIGNED AUTO_INCREMENT ,
    user_id INT UNSIGNED,
    country VARCHAR(50) NOT NULL, 
    city VARCHAR(50) NOT NULL,
    school VARCHAR(50) NOT NULL,
    degree VARCHAR(50) NOT NULL,
    grade VARCHAR(50) NOT NULL,
    PRIMARY KEY (education_id),
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    
)
CREATE TABLE contacts ( 
    contact_id INT UNSIGNED AUTO_INCREMENT ,
    user_id INT UNSIGNED,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    PRIMARY KEY (contact_id),
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    
)

CREATE TABLE projects ( 
    project_id INT UNSIGNED AUTO_INCREMENT ,
    user_id INT UNSIGNED,
    title VARCHAR(50) NOT NULL,
    description VARCHAR(100) NOT NULL,
    github_link VARCHAR(100) NOT NULL,
    photo_link VARCHAR(100) NOT NULL,
    PRIMARY KEY (project_id),
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    
)
INSERT INTO `users`(`user_name`, `user_surname`, `user_username`, `user_password`) VALUES ("Gazmor","Abdiu","eaglegazi","presheva123"); //fixed









 <?php
      
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
          echo '<div>';
          echo '<span class="text-secondary">';
          echo $row['email'];
          echo '</span>';
          echo  $row['phone']; 
          echo '</div>';
        }
      ?>



      .about-info .job {
      background: #515151;
      padding: 0.5rem;
      border-bottom: #eece1a 5px solid; }