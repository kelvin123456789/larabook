<?php
$I = new FunctionalTester($scenario);
$I ->am('a guest');
$I->wantTo('Sign Up for a Larabook Account');


$I -> amOnPage('/');
$I -> click('Sign Up!');
$I -> seeCurrentUrlEquals('/register');

$I -> fillField('Username:','JohnDoe');
$I -> fillField('Email:','john@example.com');
$I -> fillField('Password:','demo');
$I -> fillField('Password Confirmation:','demo');
$I ->click('Sign Up');

$I -> seeCurrentUrlEquals('');
$I ->see('Welcome to Larabook');
$I -> assertTrue(Auth::check());

//$I -> seeRecord('users',[
//    'username'=>'JohnDoe',
//    'email'=>'john@example.com'
//]);