/*==============================================================*/
/* Nom de SGBD :  PostgreSQL 8                                  */
/* Date de création :  21/03/2017 10:34:18                      */
/*==============================================================*/
drop database cobazzar;
create database cobazzar;
use cobazzar;

drop index CATEGORIE_PK;

drop table CATEGORIE;

drop index USERCONTACT_FK;

drop index CONTACTUS_PK;

drop table CONTACTUS;

drop index DESCRIPTIONPRODUIT_PK;

drop table DESCRIPTIONPRODUIT;

drop index USERPANIER_FK;

drop index FACTURE_PK;

drop table FACTURE;

drop index PRODUITDESC2_FK;

drop index PRODUITDESC_FK;

drop index PRODUITDESC_PK;

drop table PRODUITDESC;

drop index PRODUITFACTURE2_FK;

drop index PRODUITFACTURE_FK;

drop index PRODUITFACTURE_PK;

drop table PRODUITFACTURE;

drop index SOUSCATEGORIEPRODUIT_FK;

drop index PRODUITS_PK;

drop table PRODUITS;

drop index CATEGORIESOUSCATEGORIE_FK;

drop index SOUSCATEGORIE_PK;

drop table SOUSCATEGORIE;

drop index USER_PK;

drop table MEMBRE;

drop table ADMINIFO;

/*==============================================================*/
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE (
   IDCATEGORIE          SERIAL               not null,
   NOMCATEGORIE         VARCHAR(100)         not null,
   constraint PK_CATEGORIE primary key (IDCATEGORIE)
);

/*==============================================================*/
/* Index : CATEGORIE_PK                                         */
/*==============================================================*/
create unique index CATEGORIE_PK on CATEGORIE (
IDCATEGORIE
);

/*==============================================================*/
/* Table : CONTACTUS                                            */
/*==============================================================*/
create table CONTACTUS (
   IDCONTACTUS          SERIAL               not null,
   IDUSER               INT4                 not null,
   DATY                 DATE                 not null,
   TEXTEMESSAGE         TEXT                 not null,
   constraint PK_CONTACTUS primary key (IDCONTACTUS)
);

/*==============================================================*/
/* Index : CONTACTUS_PK                                         */
/*==============================================================*/
create unique index CONTACTUS_PK on CONTACTUS (
IDCONTACTUS
);

/*==============================================================*/
/* Index : USERCONTACT_FK                                       */
/*==============================================================*/
create  index USERCONTACT_FK on CONTACTUS (
IDUSER
);

/*==============================================================*/
/* Table : DESCRIPTIONPRODUIT                                   */
/*==============================================================*/
create table DESCRIPTIONPRODUIT (
   IDDESCRIPTION        SERIAL               not null,
   IDPRODUIT            INT4                 not null,
   DESCRIPTION          TEXT                 not null,
   SOUSDESCRIPTION      TEXT                 not null,
   constraint PK_DESCRIPTIONPRODUIT primary key (IDDESCRIPTION)
);

/*==============================================================*/
/* Index : DESCRIPTIONPRODUIT_PK                                */
/*==============================================================*/
create unique index DESCRIPTIONPRODUIT_PK on DESCRIPTIONPRODUIT (
IDDESCRIPTION
);

/*==============================================================*/
/* Table : FACTURE                                              */
/*==============================================================*/
create table FACTURE (
   IDFACTURE            SERIAL               not null,
   IDUSER               INT4                 not null,
   QUANTITE             INT4                 not null,
   DATY                 DATE                 not null,
   constraint PK_FACTURE primary key (IDFACTURE)
);

/*==============================================================*/
/* Index : FACTURE_PK                                           */
/*==============================================================*/
create unique index FACTURE_PK on FACTURE (
IDFACTURE
);

/*==============================================================*/
/* Index : USERPANIER_FK                                        */
/*==============================================================*/
create  index USERPANIER_FK on FACTURE (
IDUSER
);

/*==============================================================*/
/* Table : PRODUITDESC                                          */
/*==============================================================*/
create table PRODUITDESC (
   IDPRODUIT            INT4                 not null,
   IDDESCRIPTION        INT4                 not null,
   constraint PK_PRODUITDESC primary key (IDPRODUIT, IDDESCRIPTION)
);

/*==============================================================*/
/* Index : PRODUITDESC_PK                                       */
/*==============================================================*/
create unique index PRODUITDESC_PK on PRODUITDESC (
IDPRODUIT,
IDDESCRIPTION
);

/*==============================================================*/
/* Index : PRODUITDESC_FK                                       */
/*==============================================================*/
create  index PRODUITDESC_FK on PRODUITDESC (
IDPRODUIT
);

/*==============================================================*/
/* Index : PRODUITDESC2_FK                                      */
/*==============================================================*/
create  index PRODUITDESC2_FK on PRODUITDESC (
IDDESCRIPTION
);

/*==============================================================*/
/* Table : PRODUITFACTURE                                       */
/*==============================================================*/
create table PRODUITFACTURE (
   IDPRODUIT            INT4                 not null,
   IDFACTURE            INT4                 not null,
   IDPRODUITFACTURE     SERIAL               not null,
   constraint PK_PRODUITFACTURE primary key (IDPRODUIT, IDFACTURE)
);

/*==============================================================*/
/* Index : PRODUITFACTURE_PK                                    */
/*==============================================================*/
create unique index PRODUITFACTURE_PK on PRODUITFACTURE (
IDPRODUIT,
IDFACTURE
);

/*==============================================================*/
/* Index : PRODUITFACTURE_FK                                    */
/*==============================================================*/
create  index PRODUITFACTURE_FK on PRODUITFACTURE (
IDPRODUIT
);

/*==============================================================*/
/* Index : PRODUITFACTURE2_FK                                   */
/*==============================================================*/
create  index PRODUITFACTURE2_FK on PRODUITFACTURE (
IDFACTURE
);

/*==============================================================*/
/* Table : PRODUITS                                             */
/*==============================================================*/
create table PRODUITS (
   IDPRODUIT            SERIAL               not null,
   IDSOUSCATEGORIE      INT4                 not null,
   NOMPRODUIT           VARCHAR(100)         not null,
   IMAGE                VARCHAR(100)             not null,
   PRIX                 INT4                 null,
   constraint PK_PRODUITS primary key (IDPRODUIT)
);

/*==============================================================*/
/* Index : PRODUITS_PK                                          */
/*==============================================================*/
create unique index PRODUITS_PK on PRODUITS (
IDPRODUIT
);

/*==============================================================*/
/* Index : SOUSCATEGORIEPRODUIT_FK                              */
/*==============================================================*/
create  index SOUSCATEGORIEPRODUIT_FK on PRODUITS (
IDSOUSCATEGORIE
);

/*==============================================================*/
/* Table : SOUSCATEGORIE                                        */
/*==============================================================*/
create table SOUSCATEGORIE (
   IDSOUSCATEGORIE      SERIAL               not null,
   IDCATEGORIE          INT4                 not null,
   NOMSOUSCATEGORIE     VARCHAR(100)         not null,
   constraint PK_SOUSCATEGORIE primary key (IDSOUSCATEGORIE)
);

/*==============================================================*/
/* Index : SOUSCATEGORIE_PK                                     */
/*==============================================================*/
create unique index SOUSCATEGORIE_PK on SOUSCATEGORIE (
IDSOUSCATEGORIE
);

/*==============================================================*/
/* Index : CATEGORIESOUSCATEGORIE_FK                            */
/*==============================================================*/
create  index CATEGORIESOUSCATEGORIE_FK on SOUSCATEGORIE (
IDCATEGORIE
);

/*==============================================================*/
/* Table : "USER"                                               */
/*==============================================================*/
create table  MEMBRE (
   IDUSER               SERIAL               not null,
   NOM                  CHAR(50)             not null,
   MAIL                 CHAR(50)             not null,
   MOTDEPASSE           CHAR(20)             not null,
   constraint PK_USER primary key (IDUSER)
);
create table  ADMINIFO (
	IDADMIN              SERIAL               not null,
	NOM                  CHAR(50)             not null,
	MAIL                 CHAR(50)             not null,
	MOTDEPASSE           CHAR(20)             not null,
	constraint PK_ADMIN primary key (IDADMIN)
);

/*==============================================================*/
/* Index : USER_PK                                              */
/*==============================================================*/
create unique index USER_PK on "USER" (
IDUSER
);

alter table CONTACTUS
   add constraint FK_CONTACTU_USERCONTA_USER foreign key (IDUSER)
      references  MEMBRE (IDUSER)
      on delete restrict on update restrict;

alter table FACTURE
   add constraint FK_FACTURE_USERPANIE_USER foreign key (IDUSER)
      references  MEMBRE (IDUSER)
      on delete restrict on update restrict;

alter table PRODUITDESC
   add constraint FK_PRODUITD_PRODUITDE_PRODUITS foreign key (IDPRODUIT)
      references PRODUITS (IDPRODUIT)
      on delete restrict on update restrict;

alter table PRODUITDESC
   add constraint FK_PRODUITD_PRODUITDE_DESCRIPT foreign key (IDDESCRIPTION)
      references DESCRIPTIONPRODUIT (IDDESCRIPTION)
      on delete restrict on update restrict;

alter table PRODUITFACTURE
   add constraint FK_PRODUITF_PRODUITFA_PRODUITS foreign key (IDPRODUIT)
      references PRODUITS (IDPRODUIT)
      on delete restrict on update restrict;

alter table PRODUITFACTURE
   add constraint FK_PRODUITF_PRODUITFA_FACTURE foreign key (IDFACTURE)
      references FACTURE (IDFACTURE)
      on delete restrict on update restrict;

alter table PRODUITS
   add constraint FK_PRODUITS_SOUSCATEG_SOUSCATE foreign key (IDSOUSCATEGORIE)
      references SOUSCATEGORIE (IDSOUSCATEGORIE)
      on delete restrict on update restrict;

alter table SOUSCATEGORIE
   add constraint FK_SOUSCATE_CATEGORIE_CATEGORI foreign key (IDCATEGORIE)
      references CATEGORIE (IDCATEGORIE)
      on delete restrict on update restrict;

