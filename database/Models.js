const db = require('better-sqlite3')('database.db');

function MessagesModel(title = 'director') {
    db.exec(`CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, message TEXT)`);
    const data = db.prepare("SELECT * FROM messages WHERE title = ?").get(title);
    console.log(data);
    return data;
}

module.exports = {
    MessagesModel
}
