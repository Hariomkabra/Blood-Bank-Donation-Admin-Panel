create database blood_donation; /* creating database*/
use blood_donation;

/*create table donor_details in which all donor information gets stored.*/
create table donor_details(
donor_id int auto_increment NOT NULL,
donor_name varchar(50) NOT NULL,
donor_number varchar(10) NOT NULL,
donor_mail varchar(50),
donor_age int(60) NOT NULL,
donor_gender varchar(10) NOT NULL,
donor_blood varchar(10) NOT NULL,
donor_address varchar(100) NOT NULL,
Primary key(donor_id)
);
/*create table admin_info in which all admin information gets stored.*/
create table admin_info(
admin_id int(10) NOT NULL UNIQUE AUTO_INCREMENT,
admin_name varchar(50) NOT NULL,
admin_username varchar(50) NOT NULL UNIQUE,
admin_password varchar(50) NOT NULL,
Primary key(admin_id)
);

/*  insert admin data into admin_info table*/
insert into admin_info(admin_name,admin_username,admin_password)
values("Varun","varunsardana004",123);

/*create table blood in which all blood group is stored.*/
create table blood(
blood_id int auto_increment Not Null,
blood_group varchar(10) NOT NULL,
primary key(blood_id)
);

/* insert all blood groups*/
insert into blood(blood_group)
values("B+"),("B-"),("A+"),("O+"),("O-"),("A-"),("AB+"),("AB-");


/*create table pages in which all pages information gets stored.*/
create table pages(
page_id int NOT NULL auto_increment UNIQUE,
page_name varchar(255) NOT NULL,
page_type varchar(255) NOT NULL,
page_data longtext NOT NULL
);
ALTER TABLE pages
MODIFY COLUMN page_type varchar(50) UNIQUE;

/*create table contact_info in which your site contact information is stored.*/
create table contact_info(
contact_id int auto_increment Not Null,
contact_address varchar(100) NOT NULL,
contact_mail varchar(50) NOT NULL,
contact_phone varchar(100) NOT NULL,
primary key(contact_id)
);

insert into contact_info(contact_address,contact_mail,contact_phone)
values("Kanchanwadi(Chh.Sambhaji Nagar)","bloodbank@gmail.com","9146478677");


INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(2, 'Why Become Donor', 'donor', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions. Safe blood saves lives and improves health. Blood transfusion is needed for:
1)women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth.
2)children with severe anaemia often resulting from malaria or malnutrition.
3)people with severe trauma following man-made and natural disasters.
4)many complex medical and surgical procedures and cancer patients.
It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia. There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.</span>'),
(3, <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .about-text {
            color: #333;
            font-family: 'Open Sans', Arial, sans-serif;
            text-align: justify;
            line-height: 1.6;
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="about-text">
        <strong>Blood Bank & Donation Management (BBD)</strong> is a state-of-the-art platform designed to support the efficient management of blood donations, storage, and distribution. Blood banks play a vital role in healthcare by securely storing blood collected from donation events, ensuring that every unit is safe, accessible, and ready for those in need.

        Our system streamlines the process, providing a systematic approach to blood bag management from the moment of donation to its ultimate use. Each blood bag is handled with utmost care and precision, recognizing that it could mean the difference between life and death for a patient.

        With the BBD platform, individuals can easily register to donate blood or seek help in finding compatible blood units, enhancing accessibility for donors and recipients alike. Through innovative technology, we aim to bridge the gap between donors and those in critical need, reinforcing the value of each contribution and supporting life-saving healthcare services.
    </div>
</body>
</html>
);


INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(4, 'The Need For Blood', 'needforblood', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">There are many reasons patients need blood. A common misunderstanding about blood usage is that accident victims are the patients who use the most blood. Actually, people needing the most blood include those:
1) Being treated for cancer<br>
2) Undergoing orthopedic surgeries<br>
3) Undergoing cardiovascular surgeries<br>
4) Being treated for inherited blood disorders</span>');

INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(5, 'Blood Tips', 'bloodtips', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
1) You must be in good health. <br>
2) Hydrate and eat a healthy meal before your donation.<br>
3) You’re never too old to donate blood. <br>
4) Rest and relaxed.<br>
5) Don’t forget your FREE post-donation snack. 
</span>'),
(6, 'Who you could Help', 'whoyouhelp', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
Every 2 seconds, someone in the World needs blood. Donating blood can help:

1) People who go through disasters or emergency situations.<br>
2) People who lose blood during major surgeries.<br>
3) People who have lost blood because of a gastrointestinal bleed.<br>
4) Women who have serious complications during pregnancy or childbirth.<br>
5) People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.<br>
</span>');
INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
('7','Blood Groups','bloodgroups','<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
  <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <p>Your blood group is determined by the genes you inherit from your parents.<br>
                  A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </p>

</span>'),
(<span style="color: rgb(0, 0, 0); font-family: 'Open Sans', Arial, sans-serif; text-align: justify; line-height: 1.6;">
    <p>
        Did you know that blood type O is the most common worldwide, followed closely by type A? People with type O blood are often known as "universal donors" because their blood can be transfused to individuals of any blood type. On the other hand, those with type AB blood are considered "universal recipients," as they can receive blood from any blood type.
    </p>
    <p>
        In critical situations, type O-negative blood is highly valuable due to its minimal risk of causing adverse reactions in most recipients. This unique attribute has earned it the title of the "universal blood donor type" — making it essential in emergency transfusions and life-saving procedures.
    </p>
</span>
);


update pages
set page_data='<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions. Safe blood saves lives and improves health. Blood transfusion is needed for:
<ul><li>women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth.
</li><li>children with severe anaemia often resulting from malaria or malnutrition.
</li><li>people with severe trauma following man-made and natural disasters.
</li><li>many complex medical and surgical procedures and cancer patients.</li></ul>
<br>It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia. There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.</span>'
    where page_type="donor";
    
    
    /*create table contact_query in which all querier inforamation gets stored.*/
create table contact_query(
query_id int auto_increment Not Null,
query_name varchar(100) NOT NULL,
query_mail varchar(120) NOT NULL,
query_number char(11) NOT NULL,
query_message longtext NOT NULL,
query_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
query_status int(11) DEFAULT NULL,
Primary key(query_id)
);    
alter table contact_query modify column query_date
timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


insert into contact_query (query_name,query_mail,query_number,query_message) values
("Anuj","anuj@gmail.com","9923471025","I need O+ Blood.");

update contact_query set query_status="1" where query_id="1";

/*create table query_stat in which query status is stored.*/
CREATE TABLE query_stat(
  id INT NOT NULL Unique,
 query_type VARCHAR(45) NOT NULL,
  PRIMARY KEY (id)
  );
  
  
  insert into query_stat(id,query_type)
  values('1',"Read"),
  ('2',"Pending");
  