# 📊 Struktur Project Kaggle Learn Indonesia

## 📁 Organisasi File

```
kaggleradya/
│
├── index.html                    # Halaman Utama (Home Page)
├── python.html                   # Daftar Pelajaran Python
├── sql.html                      # Daftar Pelajaran SQL
├── guide.html                    # Panduan Memulai
│
├── css/
│   └── style.css                 # Stylesheet untuk semua halaman
│
├── lessons/                      # Folder Materi Pelajaran
│   │
│   ├─── Python Lessons (7 files)
│   ├── python-01.html            # Pelajaran 1: Halo, Python
│   ├── python-02.html            # Pelajaran 2: Fungsi dan Mendapatkan Bantuan
│   ├── python-03.html            # Pelajaran 3: Boolean dan Kondisional
│   ├── python-04.html            # Pelajaran 4: Daftar (Lists)
│   ├── python-05.html            # Pelajaran 5: Loop dan List Comprehension
│   ├── python-06.html            # Pelajaran 6: String dan Dictionary
│   ├── python-07.html            # Pelajaran 7: Bekerja dengan Library Eksternal
│   │
│   ├─── SQL Lessons (6 files)
│   ├── sql-01.html               # Pelajaran 1: Memulai dengan SQL dan BigQuery
│   ├── sql-02.html               # Pelajaran 2: Select, From & Where
│   ├── sql-03.html               # Pelajaran 3: Group By, Having & Count
│   ├── sql-04.html               # Pelajaran 4: Order By
│   ├── sql-05.html               # Pelajaran 5: As & With
│   └── sql-06.html               # Pelajaran 6: Menggabungkan Data (JOIN)
│
├── README.md                     # Dokumentasi Project
├── PETUNJUK_MEMULAI.md          # Panduan Instalasi dan Setup
└── PROJECT_STRUCTURE.md         # File Ini
```

## 🎯 Deskripsi File Utama

### Halaman Utama
- **index.html** - Halaman pertama yang pengunjung lihat dengan pilihan 2 materi utama

### Halaman Materi
- **python.html** - Menampilkan 7 pelajaran Python dalam grid
- **sql.html** - Menampilkan 6 pelajaran SQL dalam grid
- **guide.html** - Panduan lengkap cara menggunakan platform

### Styling
- **css/style.css** - File CSS terpusat untuk seluruh website
  - Responsive design (mobile, tablet, desktop)
  - Color scheme: gradient ungu
  - Komponten: header, footer, cards, buttons, navigation

### Pelajaran (lessons/)
Setiap file pelajaran memiliki struktur:
```html
- Header dengan judul dan breadcrumb (← Kembali)
- Konten materi dengan:
  - Penjelasan (h2, h3, p)
  - Contoh kode (code-example div)
  - Tips berguna (tip div)
  - Ringkasan pelajaran (ul list)
- Footer dengan navigasi antar pelajaran
```

## 🎨 Komponen UI

### Warna (Color Scheme)
- Primary: `#667eea` (Ungu muda)
- Secondary: `#764ba2` (Ungu tua)
- Text: `#333` (Gelap untuk readability)
- Background: `#f5f5f5` (Putih broken)
- Accent: Gradient primary → secondary

### Typography
- Font: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
- Heading: 2-2.5rem untuk h1, 1.3-1.8rem untuk h2-h3
- Body: 1rem, line-height 1.6-1.8

### Responsive Breakpoints
- Desktop: 1200px max-width container
- Tablet: Responsive grid dengan gap 1-2rem
- Mobile: Single column layout

## 🔗 Alur Navigasi

```
index.html
  ├─→ python.html
  │     ├─→ python-01.html ←→ python-02.html
  │     ├─→ python-02.html ←→ python-03.html
  │     ├─→ python-03.html ←→ python-04.html
  │     ├─→ python-04.html ←→ python-05.html
  │     ├─→ python-05.html ←→ python-06.html
  │     ├─→ python-06.html ←→ python-07.html
  │     └─→ python-07.html ← Selesai
  │
  ├─→ sql.html
  │     ├─→ sql-01.html ←→ sql-02.html
  │     ├─→ sql-02.html ←→ sql-03.html
  │     ├─→ sql-03.html ←→ sql-04.html
  │     ├─→ sql-04.html ←→ sql-05.html
  │     ├─→ sql-05.html ←→ sql-06.html
  │     └─→ sql-06.html ← Selesai
  │
  └─→ guide.html
```

## 📊 Statistik Konten

### Python
- **Total Pelajaran**: 7
- **Estimasi Waktu**: 5 jam
- **Topik**: Syntax, Fungsi, Kondisional, Data Structures, Loop, String, Dictionary, Library

### SQL
- **Total Pelajaran**: 6
- **Estimasi Waktu**: 3 jam
- **Topik**: SQL Basics, SELECT, GROUP BY, ORDER BY, CTE, JOIN

### Total
- **File HTML**: 17 (1 index + 2 main + 1 guide + 13 lessons)
- **File CSS**: 1
- **Total Konten**: ~13,000+ kata dalam Bahasa Indonesia

## 🔧 Teknologi yang Digunakan

- **HTML5** - Struktur halaman
- **CSS3** - Styling dan responsive design
- **JavaScript** - Belum diimplementasikan (future enhancement)
- **Google Fonts** - Opsional (current: system fonts)
- **No Framework** - Pure HTML/CSS (lightweight & fast)

## 🚀 Cara Mengextend Project

### Menambah Pelajaran Baru
1. Buat file `lessons/category-XX.html`
2. Copy template dari pelajaran yang ada
3. Ganti konten materi
4. Update links di file kategori (python.html atau sql.html)
5. Test di browser

### Menambah Kategori Baru (Misal: Git, Docker, dll)
1. Buat file `<category>.html` di root
2. Buat folder `lessons/<category>/` jika perlu
3. Ikuti struktur yang sama
4. Update `index.html` dengan card baru
5. Update styling jika diperlukan

### Customization CSS
Edit `css/style.css`:
- Warna: Ubah variable `#667eea` dan `#764ba2`
- Font: Ubah `font-family` di `body`
- Spacing: Ubah margin/padding values
- Layout: Ubah `grid-template-columns` untuk responsiveness

## 📝 Best Practices

1. **Konsistensi**: Semua pelajaran mengikuti struktur yang sama
2. **Accessibility**: Semantic HTML, proper heading hierarchy
3. **Performance**: No external dependencies, fast loading
4. **Mobile-First**: Design dimulai dari mobile dulu
5. **Readability**: Code clean, indentation konsisten
6. **SEO**: Meta tags, descriptive titles, proper structure

## 🔐 Maintenance

### Regular Updates
- Review konten setiap 3 bulan
- Update links ke Kaggle Learn jika berubah
- Test semua links dan navigation
- Check responsive design di berbagai devices

### Backup
- Backup seluruh folder `kaggleradya` secara regular
- Version control jika menggunakan Git
- Simpan di cloud storage (Google Drive, etc)

## 📞 Support dan Kontribusi

### Report Issues
- Catat deskripsi masalah
- Screenshot jika ada
- Note browser dan OS yang digunakan
- Test di browser lain untuk confirm

### Kontribusi
- Fork atau edit file yang relevan
- Test perubahan di browser
- Dokumentasikan changes
- Submit dengan penjelasan lengkap

---

**Last Updated**: 29 November 2025
**Version**: 1.0
**Status**: Production Ready ✅
