Pertemuan kali ini kita akan mambahas tentang Abstract Class

Abstract Class (1)
1. Sebuah class yang tidak dapat diinstansiasi, melainkan class turunannya
2. Kelas 'abstrak'
3. Mendefinisikan interface untuk kelas lain yang menjadi turunannya
4. Berperan sebagai 'kerangka dasar' untuk kelas turunannya
5. Memiliki minimal 1 method abstrak
6. Digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya

Abstract Class (2)
1. Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
2. Kelas abstrak boleh memiliki property / method regular
3. Kelas abstrak boleh memiliki property / static method

Contoh Kelas Abstrak
- class Mobil Extends Kendaraan
- class Laptop Extends Komputer
- class Email Extends Komunikasi
- ...

Kenapa ?
1. Merepresentasikan ide atau konsep dasar
2. "Composition over inheritance"
3. Salah satu cara menerapkan Polimorphism
4. Sentralisasi logic
5. Mempermudah pengerjaan tim