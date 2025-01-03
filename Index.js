const express = require('express');
const mysql = require('mysql2');
const app = express();

app.use(express.json());

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'sister'
});

db.connect(err => {
    if (err) {
        console.error('Database connection failed: ', err.stack);
        return;
    }
    console.log('Connected to database.');
});

// CRUD Mahasiswa
app.get('/mahasiswa', (req, res) => {
    db.query('SELECT * FROM mahasiswa', (err, results) => {
        if (err) res.status(500).json(err);
        else res.json(results);
    });
});

app.post('/mahasiswa', (req, res) => {
    const { nama, nim, jurusan } = req.body;
    db.query('INSERT INTO mahasiswa (nama, nim, jurusan) VALUES (?, ?, ?)', [nama, nim, jurusan], (err, results) => {
        if (err) res.status(500).json(err);
        else res.status(201).json({ id: results.insertId, ...req.body });
    });
});

app.put('/mahasiswa/:id', (req, res) => {
    const { id } = req.params;
    const { nama, nim, jurusan } = req.body;
    db.query('UPDATE mahasiswa SET nama = ?, nim = ?, jurusan = ? WHERE id = ?', [nama, nim, jurusan, id], (err) => {
        if (err) res.status(500).json(err);
        else res.json({ message: 'Mahasiswa updated successfully' });
    });
});

app.delete('/mahasiswa/:id', (req, res) => {
    const { id } = req.params;
    db.query('DELETE FROM mahasiswa WHERE id = ?', [id], (err) => {
        if (err) res.status(500).json(err);
        else res.json({ message: 'Mahasiswa deleted successfully' });
    });
});

// CRUD Mata Kuliah
app.get('/mata-kuliah', (req, res) => {
    db.query('SELECT * FROM mata_kuliah', (err, results) => {
        if (err) res.status(500).json(err);
        else res.json(results);
    });
});

app.post('/mata-kuliah', (req, res) => {
    const { nama_mk, kode_mk, sks } = req.body;
    db.query('INSERT INTO mata_kuliah (nama_mk, kode_mk, sks) VALUES (?, ?, ?)', [nama_mk, kode_mk, sks], (err, results) => {
        if (err) res.status(500).json(err);
        else res.status(201).json({ id: results.insertId, ...req.body });
    });
});

app.put('/mata-kuliah/:id', (req, res) => {
    const { id } = req.params;
    const { nama_mk, kode_mk, sks } = req.body;
    db.query('UPDATE mata_kuliah SET nama_mk = ?, kode_mk = ?, sks = ? WHERE id = ?', [nama_mk, kode_mk, sks, id], (err) => {
        if (err) res.status(500).json(err);
        else res.json({ message: 'Mata kuliah updated successfully' });
    });
});

app.delete('/mata-kuliah/:id', (req, res) => {
    const { id } = req.params;
    db.query('DELETE FROM mata_kuliah WHERE id = ?', [id], (err) => {
        if (err) res.status(500).json(err);
        else res.json({ message: 'Mata kuliah deleted successfully' });
    });
});

// Start Server
const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
