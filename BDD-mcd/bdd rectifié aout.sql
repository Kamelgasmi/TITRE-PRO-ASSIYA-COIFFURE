#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: kgtp_roles
#------------------------------------------------------------

CREATE TABLE kgtp_roles(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT kgtp_roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_userClients
#------------------------------------------------------------

CREATE TABLE kgtp_userClients(
        id            Int  Auto_increment  NOT NULL ,
        lastname      Varchar (50) NOT NULL ,
        firstname     Varchar (50) NOT NULL ,
        address       Varchar (255) NOT NULL ,
        phoneNumber   Varchar (50) NOT NULL ,
        mail          Varchar (255) NOT NULL ,
        password      Varchar (50) NOT NULL ,
        id_kgtp_roles Int NOT NULL
	,CONSTRAINT kgtp_userClients_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_userClients_kgtp_roles_FK FOREIGN KEY (id_kgtp_roles) REFERENCES kgtp_roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_orders
#------------------------------------------------------------

CREATE TABLE kgtp_orders(
        id                  Int  Auto_increment  NOT NULL ,
        number              Varchar (50) NOT NULL ,
        dateOrder           Datetime NOT NULL ,
        tracking            Varchar (50) NOT NULL ,
        dateDelivery        Datetime NOT NULL ,
        id_kgtp_userClients Int NOT NULL
	,CONSTRAINT kgtp_orders_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_orders_kgtp_userClients_FK FOREIGN KEY (id_kgtp_userClients) REFERENCES kgtp_userClients(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_deliveryMethod
#------------------------------------------------------------

CREATE TABLE kgtp_deliveryMethod(
        id     Int  Auto_increment  NOT NULL ,
        method Varchar (50) NOT NULL
	,CONSTRAINT kgtp_deliveryMethod_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_deliveryPrice
#------------------------------------------------------------

CREATE TABLE kgtp_deliveryPrice(
        id                     Int  Auto_increment  NOT NULL ,
        weight                 Int NOT NULL ,
        price                  Float NOT NULL ,
        id_kgtp_deliveryMethod Int NOT NULL
	,CONSTRAINT kgtp_deliveryPrice_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_deliveryPrice_kgtp_deliveryMethod_FK FOREIGN KEY (id_kgtp_deliveryMethod) REFERENCES kgtp_deliveryMethod(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_categories
#------------------------------------------------------------

CREATE TABLE kgtp_categories(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (30) NOT NULL
	,CONSTRAINT kgtp_categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_products
#------------------------------------------------------------

CREATE TABLE kgtp_products(
        id                 Int  Auto_increment  NOT NULL ,
        name               Varchar (100) NOT NULL ,
        photo              Varchar (100) NOT NULL ,
        quantity           Int NOT NULL ,
        price              Float NOT NULL ,
        weight             Float NOT NULL ,
        description        Varchar (255) NOT NULL ,
        id_kgtp_categories Int NOT NULL
	,CONSTRAINT kgtp_products_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_products_kgtp_categories_FK FOREIGN KEY (id_kgtp_categories) REFERENCES kgtp_categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_carts
#------------------------------------------------------------

CREATE TABLE kgtp_carts(
        id               Int  Auto_increment  NOT NULL ,
        id_kgtp_orders   Int NOT NULL ,
        id_kgtp_products Int NOT NULL
	,CONSTRAINT kgtp_carts_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_carts_kgtp_orders_FK FOREIGN KEY (id_kgtp_orders) REFERENCES kgtp_orders(id)
	,CONSTRAINT kgtp_carts_kgtp_products0_FK FOREIGN KEY (id_kgtp_products) REFERENCES kgtp_products(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_opinions
#------------------------------------------------------------

CREATE TABLE kgtp_opinions(
        id                  Int  Auto_increment  NOT NULL ,
        date                Datetime NOT NULL ,
        text                Varchar (255) NOT NULL ,
        star                Int NOT NULL ,
        id_kgtp_products    Int NOT NULL ,
        id_kgtp_userClients Int NOT NULL
	,CONSTRAINT kgtp_opinions_PK PRIMARY KEY (id)

	,CONSTRAINT kgtp_opinions_kgtp_products_FK FOREIGN KEY (id_kgtp_products) REFERENCES kgtp_products(id)
	,CONSTRAINT kgtp_opinions_kgtp_userClients0_FK FOREIGN KEY (id_kgtp_userClients) REFERENCES kgtp_userClients(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: kgtp_orderDeliveryMethod
#------------------------------------------------------------

CREATE TABLE kgtp_orderDeliveryMethod(
        id             Int NOT NULL ,
        id_kgtp_orders Int NOT NULL
	,CONSTRAINT kgtp_orderDeliveryMethod_PK PRIMARY KEY (id,id_kgtp_orders)

	,CONSTRAINT kgtp_orderDeliveryMethod_kgtp_deliveryMethod_FK FOREIGN KEY (id) REFERENCES kgtp_deliveryMethod(id)
	,CONSTRAINT kgtp_orderDeliveryMethod_kgtp_orders0_FK FOREIGN KEY (id_kgtp_orders) REFERENCES kgtp_orders(id)
)ENGINE=InnoDB;
