<?php
include('includes/header.php');

$contacts = $obj->getAll('contacts');

?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contact Details</h3>
            </div>
            <div class="clearfix"></div>
            <div class="container mt-5">
                <?php if (isset($contacts) && !empty($contacts)): // Check if contacts data is available 
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contacts as $contact): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($contact['id']); ?></td>
                                        <td><?= htmlspecialchars($contact['name']); ?></td>
                                        <td><?= htmlspecialchars($contact['phone']); ?></td>
                                        <td><?= htmlspecialchars($contact['email']); ?></td>
                                        <td><?= nl2br(htmlspecialchars($contact['message'])); // Preserves line breaks 
                                            ?></td>
                                        <td><?= htmlspecialchars($contact['date_added']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <!-- Display a message if no contact messages are found -->
                    <div class="alert alert-warning text-center" role="alert">
                        No contact messages found.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php include('includes/footer.php'); ?>