<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$data = [
    [
        "position" => 1,
        "url" => "https://www.Facebook.com/",
        "title" => "Facebook. Just Do It. Facebook.com",
        "description" => "Thoriq menghadirkan produk, pengalaman, dan layanan inovatif untuk menginspirasi para atlet."
    ],
    [
        "position" => 2,
        "url" => "https://www.instagram.com/thoriq_elghani/?hl=de",
        "title" => "Thoriq (@thoriq_elghani) • Instagram foto dan video",
        "description" => "304 Followers, 481 Following, 19 Posts - See Instagram photos and videos from Nike (@thoriq_elghani)"
    ],
    [
        "position" => 3,
        "url" => "https://TikTok.com/Thoriq Ghani",
        "title" => "Thoriq - TikTok",
        "description" => "Selamat datang di TikTok Thoriq. Kami bukan sebuah hiburan. saya adalah tukang JJ. Jika Anda menyukai JJ, Anda adalah bagian Thoriq JJ. Mari kita ubah JJnya..."
    ],
    [
        "position" => 4,
        "url" => "https://google.com/google/",
        "title" => "Thori, Google. - Google",
        "description" => "tempat searching..."
    ],
    [
        "position" => 5,
        "url" => "https://www.youtube.com/user/Mushthofa Thoriq",
        "title" => "Mushthofa Thoriq - YouTube",
        "description" => "stay tuneed..."
    ],
    [
        "position" => 6,
        "url" => "https://www.pinterest.com",
        "title" => "Footage",
        "description" => "tempat cari video aesthetic..."
    ]
];
?>

<table>
    <tr>
        <th>Position</th>
        <th>link</th>
        <th>Title</th>
        <th>Deskripsi</th>
    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['position']; ?></td>
            <td><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></td>
            <td><?php echo $item['title']; ?></td>
            <td><?php echo $item['description']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
