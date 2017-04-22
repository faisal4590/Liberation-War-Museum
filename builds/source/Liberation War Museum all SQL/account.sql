CREATE table  account(
  account_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 67237183001 INCREMENT BY 1),
  account_type varchar(100),
  account_name varchar(100),
  account_balance number(8,3) CHECK (account_balance>0),
  account_deposition_date DATE ,
  account_creation_date DATE,
  bank_name VARCHAR(100),
  branch_name VARCHAR(100),

  CONSTRAINT account_account_id_pk PRIMARY KEY (account_id),
  CONSTRAINT account_account_balance_ck CHECK (account_balance>0)
);