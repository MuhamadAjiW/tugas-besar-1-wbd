<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Books</title>
    <link rel="stylesheet" href="../../public/css/adminpage.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

    <?php
        include __DIR__ . "/../components/adminsidebar.php";
    ?>

    <div class="main-content">
        <div class="page-container">
            <div class="page-header">
                <h2>List of all Books</h2>
                <button class="admin-buttons add-button" id="add-book-button" onclick="location.href='/addbook'">Add Book</button>
            </div>
            <table class="book-table">
                <thead>
                    <tr>
                    <th class="book-column">Book ID</th>
                    <th class="book-column">Title</th>
                    <th class="book-column">Release date</th>
                    <th class="book-column">Author</th>
                    <th class="book-column" colspan="2">Action</th>
                    </tr>
                </thead>
                <?php foreach ($bookdata as $book): ?>
                    <tr>
                        <td><?= $book['book_id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['release_date'] ?></td>
                        <td><?= $book['name'] ?></td>
                        <td><button class="admin-buttons edit-button" data-book-id="<?= $book['book_id'] ?>">Edit</button></td>
                        <td><button class="admin-buttons delete-button" data-book-id="<?= $book['book_id'] ?>">Delete</button></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="delete-modal">
            <div class="delete-modal-content">
                <div class="delete-container">
                    <h1 class = "delete-modal-title">Delete Book</h1>
                    <p class = "delete-modal-text">Are you sure you want to delete this book?</p>

                    <div class="delete-modal-buttons">
                        <button type="button" class="delete-modal-btn" id="cancel-delete-btn">Cancel</button>
                        <button type="button" class="delete-modal-btn" id="modal-delete-book-btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../../public/js/admin.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>

<script> // Modal for book deletion
    // Get the modal
    var deletemodal = document.getElementsByClassName("delete-modal")[0];
    
    // Get the open modal button
    document.addEventListener("click", function() {
        if (event.target.classList.toString() == "admin-buttons delete-button") {
            deletemodal.style.display = "block";
            var bookID = event.target.getAttribute("data-book-id");
        }
    })


    // Get the delete button
    var deletebtn = document.getElementById("modal-delete-book-btn");

    // Get the cancel button
    var cancelbtn = document.getElementById("cancel-delete-btn");

    cancelbtn.onclick = function() {
        deletemodal.style.display = "none";
    }

    // ntar diganti kalau udah jadi
    deletebtn.onclick = function() {
        deletemodal.style.display = "none";
    }

</script>