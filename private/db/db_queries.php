<?php

// ======================== USERS ========================

function getUserEmail ($user_email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT user_email FROM table_users WHERE user_email=?");
    $stmt->execute([$user_email]);
    $data = $stmt->fetch();
    return $data;
};

function getUserPassword ($user_email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT user_password FROM table_users WHERE user_email=? LIMIT 1");
    $stmt->execute([$user_email]);
    $data = $stmt->fetch();
    return $data['user_password'];
}

function getUserSettings ($user_email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT user_fullname, user_id FROM table_users WHERE user_email=? LIMIT 1");
    $stmt->execute([$user_email]);
    $data = $stmt->fetch();
    return $data;
}

function createUser ($d) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO table_users (user_fullname, user_email, user_password, user_address, user_town, user_zip, user_phone) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$d['user_fullname'], $d['user_email'], $d['user_password'], $d['user_address'], $d['user_town'], $d['user_zip'], $d['user_phone']]);
    $stmt->fetch();     // fetchAll(\PDO::FETCH_ASSOC);
};

// ======================== EVENTS ========================


function getEventsAll () {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM table_events WHERE event_active=1");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}


function getEventById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `table_events` WHERE event_id=? LIMIT 1");
    $stmt->execute([$id]);
    $data = $stmt->fetch();
    return $data;
}

function createEvent ($d) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO table_events (event_title, event_address, event_zip, event_town, event_capacity, event_description, event_date, event_duration, event_deadline, event_category_checkboxes, event_category_type, event_price, event_cover, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$d['event_title'], $d['event_address'], $d['event_zip'], $d['event_town'], $d['event_capacity'], $d['event_description'], $d['event_date'], $d['event_duration'], $d['event_deadline'], $d['event_category_checkboxes'], $d['event_category_type'], $d['event_price'], $d['event_cover'], $d['user_id']]);
    $stmt->fetch();     // fetchAll(\PDO::FETCH_ASSOC);
};



?>
