<!-- <link href='https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css' rel='stylesheet'> -->
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css' rel='stylesheet'>
<style>
    .dfmDomainList {
        margin: 2%;
    }

    thead {
        background-color: darkcyan;
        color: white;
    }

    table#dfmDomainList {
        text-align: center;
        border: 1px solid gray;
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .dfmDomainList span.dashicons {
        color: green;
        font-size: 35px;
        margin: 0 0 15px 0;
    }
</style>
<div class="dfmDomainList">
    <table id="dfmDomainList" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Domain</th>
                <th>IP</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $domains = carbon_get_theme_option('dfm_domains_add_repeat');
            $providerIP = carbon_get_theme_option('dfm_add_provider_ip');
            foreach ($domains as $domain) {
            ?>
                <tr>
                    <td><?php echo $domain['domain_name'] ?></td>
                    <td><?php echo $domain['domain_ip'] ?></td>
                    <td>
                        <?php
                        $SiteIP = gethostbyname($domain['domain_name']);
                        if ($SiteIP == $providerIP) {
                        ?>
                            <!-- Right Look  -->
                            <span class="dashicons dashicons-yes-alt" style="color:green;"></span>
                        <?php
                        } else {
                        ?>
                            <!-- Wrong Look  -->
                            <span class="dashicons dashicons-dismiss" style="color:red;"></span>
                        <?php
                            // Send Email
                            $to = 'khalif@digitalfireflymarketing.com';
                            $subject = 'The subject';
                            $message = 'The email body content';
                            $headers = array('Content-Type: text/html; charset=UTF-8');
                            wp_mail($to, $subject, $message, $headers);
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dfmDomainList').DataTable();
    });
</script>