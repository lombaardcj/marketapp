<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Command Line Operations from project base
 * 
 * 
 * To run server:
 * >  php bin/cake.php server
 * 
 * 
 * Migrations - p97 CakePHP document reference
 * 
 * Create Migration for NEW table:
 * >  php bin/cake.php bake migration CreateUsers email:string:unique password:string created modified
 * 
 * Table field formats
 * 
 *    description:text
 *    email:string
 *    password:string
 * 
 *    short_description:string[50]
 * 
 *    maximum_products:integer
 * 
 *    price:decimal
 *    
 *    birthdate:datetime
 * 
 *    active:boolean
 * 
 *    biginteger
 * 
 *    
 *    
 *    RESERVED WORDS
 *    created
 *    modified
 *    updated
 * 
 *   RUN MIGRATION
 * >  php bin/cake.php migrations migrate
 * 
 * 
 *   ADDING an field
 * 
 *   Migration Name Syntax "AddXXXToYYY" will ADD field XXX to Table YYY
 * >  php bin/cake.php migration AddPriceToProducts price:decimal
 * 
 *   REMOVING an field
 * 
 *   Migration Name Syntax "RemoveXXXFromYYY" will REMOVE field XXX From Table YYY
 * >  php bin/cake.php migration RemovePriceFromProducts price
 * 
 * STATUS of Migration
 * >  php bin/cake.php migrations status
 * 
 * 
 * 
 * 
 * 
 * 
 * Generating Skeleton code for Model / Controller / View Template
 * >      php bin/cake.php bake all <entity name>
 * >  Eg. php bin/cake.php bake all users
 * 
 */

?>
