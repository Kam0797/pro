man:
 
 tables:
        supl
        proc
        stockin
        stockin_temp
        stockout
        stockout_temp
        product




        use sampleyu;
        //create table bat (name varchar(255),age int,addr varchar(255),ph varchar(255));
        create table cust (name varchar(255),age int,addr varchar(255),ph varchar(255));
        create table stockin (ph varchar(255),pro varchar(255),pri int,qty int,amt int, date1 date);
        create table stockout (ph varchar(255),pro varchar(255),pri int,qty int,amt int, date1 date);
        create table stockin_temp (sl int, pro varchar(255),pri int,qty int,amt int);
        create table stockout_temp (sl int auto_increment, pro varchar(255),pri int,qty int,amt int);

        prox:
                create table product (pro vachar(255) primary key,inc int,outg int);

                        this table sets the basis of inventory (inv.php)
                        when purchase is done, in col is updated and vice versa.
                        do this tmr
                        