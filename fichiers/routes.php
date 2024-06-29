<?php

require_once __DIR__.'/router.php';

get('/login.php', '/login.php');
get('/login', '/login.php');

post('/login.php', '/login.php');

get('/nouveau_compte.php', '/nouveau_compte.php');
post('/nouveau_compte.php', '/nouveau_compte.php');

any('/index.php', '/index.php');
any('/index', '/index.php');
any('/', '/index.php');

get('/recette.php', '/recette.php');

get("/api/recettes", "/api/listRecettes.php");

get('/api/recettes/$id', '/api/getRecette.php');

get('/api/recettes/type_plat/$id', '/api/getRecettesPlats.php');

post('/api/recettes', '/api/newRecette.php');

put('/api/recettes/$id', '/api/changeRecette.php'); 
post('/api/recettes/$id', '/api/changeRecette.php'); 

any('/404','/404.php');
