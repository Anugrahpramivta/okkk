<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galeri - Halaman Utama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...">
    <style>
        /* Tambahkan gaya CSS Anda di sini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #663366;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        footer {
            background-color: #663366;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            height: 40px;
        }
        .wrapper form .row i{
            position: absolute;
            width: 40px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #663366;
            border: 1px solid #663366;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .button {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 20px; /* Menambahkan padding untuk memisahkan dari tepi kanan */
        }
        .button input[
            type="submit"] {
            background-color: #663366;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            background-color:#663366;
            color: #fff; 
            padding: 5px 10px; 
            border-radius: 5px; 
            cursor: pointer;"
        }
    .delete-button:hover {
        color: black; /* Warna teks tombol saat digulir */
    }
    /* Warna untuk tombol Like */
    .like-button {
        background-color:#663366;
        color: white;
        border: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    /* Warna untuk tombol Komentar */
    .comment-button {
        background-color: #663366; 
        color: white;
        border: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    /* Warna untuk tombol Search */
    .search-button {
        background-color: #663366; /* Warna hijau */
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }
    /* Hover effect untuk tombol Search */
    .search-button:hover {
        background-color: black; /* Warna hijau lebih gelap saat digulir */
    }
    .gallery-container {
    padding: 20px;
}
.gallery {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
}
.gallery-item {
    width: 320px;
    height: auto;
    margin-right: 50px; /* Memberikan jarak di sisi kanan setiap item galeri */
}
.gallery-item:last-child {
    margin-right: 0; /* Menghapus margin di item galeri terakhir agar tidak ada jarak ekstra di sebelah kanan */
}
.gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}
.interaction {
    display: flex;
    align-items: center;
}
.interaction button {
    margin-right: 10px;
}
    </style>
</head>
<body>
    <header>
        <h1>WELCOME GALLERY ANUGRAH</h1>
    </header>
    <div class="search-box" style="display: flex;
    justify-content: center;
    margin-right: 20px;
    /* align-content: center; */
    align-items: center;">
    <input type="text" placeholder="Search" style="
        margin: 20px;
    width: 100vw;">
    <button class="search-button" type="submit" style="height: fit-content;">
    <i class="fas fa-search"></i> 
    </button>
    </div>
    <div class="gallery">
    <div class="gallery-item" id="gallery-item-1">
        <img src="1.JPG" >
        <button class="delete-button" onclick="deleteImage('gallery-item-1')">
            <i class="fas fa-trash-alt"></i> <!-- Ikon delete dari Font Awesome -->
        </button>
        <div class="interaction">
            <button class="like-button" onclick="likeImage('gallery-item-1')">
            <i class="fas fa-thumbs-up"></i>
        </button>
            <span class="likes-count">0 Likes</span>
            <input type="text" class="comment-input" placeholder="Tambahkan komentar...">
            <button class="comment-button" onclick="addComment('gallery-item-1')">
            <i class="fas fa-comment"></i>
        </button>
            <div class="comments-list"></div>
        </div>
    </div>
    <div class="gallery-item" id="gallery-item-2">
        <img src="2.JPG">
        <button class="delete-button" onclick="deleteImage('gallery-item-2')">
            <i class="fas fa-trash-alt"></i> <!-- Ikon delete dari Font Awesome -->
        </button>
        <div class="interaction">
            <button class="like-button" onclick="likeImage('gallery-item-2')">
            <i class="fas fa-thumbs-up"></i>
        </button>
            <span class="likes-count">0 Likes</span>
            <input type="text" class="comment-input" placeholder="Tambahkan komentar...">
            <button class="comment-button" onclick="addComment('gallery-item-2')">
            <i class="fas fa-comment"></i>
        </button>
            <div class="comments-list"></div>
        </div>
    </div>
    <div class="gallery-item" id="gallery-item-2">
        <img src="3.JPG">
        <button class="delete-button" onclick="deleteImage('gallery-item-2')">
            <i class="fas fa-trash-alt"></i> <!-- Ikon delete dari Font Awesome -->
        </button>
        <div class="interaction">
            <button class="like-button" onclick="likeImage('gallery-item-2')">
            <i class="fas fa-thumbs-up"></i>
        </button>
            <span class="likes-count">0 Likes</span>
            <input type="text" class="comment-input" placeholder="Tambahkan komentar...">
            <button class="comment-button" onclick="addComment('gallery-item-2')">
            <i class="fas fa-comment"></i>
        </button>
            <div class="comments-list"></div>
        </div>
    </div>
    <div class="gallery-item" id="gallery-item-2">
        <img src="4.JPG">
        <button class="delete-button" onclick="deleteImage('gallery-item-2')">
            <i class="fas fa-trash-alt"></i> <!-- Ikon delete dari Font Awesome -->
        </button>
        <div class="interaction">
            <button class="like-button" onclick="likeImage('gallery-item-2')">
            <i class="fas fa-thumbs-up"></i>
        </button>
            <span class="likes-count">0 Likes</span>
            <input type="text" class="comment-input" placeholder="Tambahkan komentar...">
            <button class="comment-button" onclick="addComment('gallery-item-2')">
            <i class="fas fa-comment"></i>
        </button>
            <div class="comments-list"></div>
        </div>
    </div>
    
    </div>
    </div>
    </div>
    <script>
    // Objek untuk menyimpan jumlah like setiap item galeri
    let likesCountMap = {};

    function likeImage(itemId) {
        // Periksa apakah itemId sudah ada dalam likesCountMap, jika belum tambahkan dengan nilai awal 0
        if (!likesCountMap[itemId]) {
            likesCountMap[itemId] = 0;
        }

        // Update jumlah like untuk itemId
        likesCountMap[itemId]++;

        // Ambil elemen span dengan class "likes-count" pada item galeri yang sesuai
        let likesCountElement = document.querySelector(`#${itemId} .likes-count`);

        // Perbarui teks di dalam elemen span
        likesCountElement.textContent = `${likesCountMap[itemId]} Likes`;
    }
</script>

<script>
    function deleteImage(galleryItemId) {
        var galleryItem = document.getElementById(galleryItemId);
        if (galleryItem) {
            galleryItem.remove();
        }
    }
    let likesCount = 0; // Variabel untuk menyimpan jumlah like
</script>
<div class="button">
        <input type="submit" value="Tambah Foto" class="logout-button" onclick="location.href='uploadfoto.php';">
    </div>
    <div class="button">
        <input type="submit" value="Logout" class="logout-button" onclick="location.href='login.php';">
    </div>
</div>

        <!-- Tambahkan lebih banyak item galeri sesuai kebutuhan -->
        
</body>
</html>