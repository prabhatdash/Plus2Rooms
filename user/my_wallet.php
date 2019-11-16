<?php
if($_SESSION['user_data']){
?>
<head>
    <link rel="stylesheet" href="<?php echo $basePath."/assets/plus2rooms_assets/css/page_css/my_profile.css" ?>" >
</head>



<div id="wallet_modal" class="modal fade bd-wallet_transaction_detail-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div  class="modal-content">
            <div class="modal-body">


                <i id="close_icon" data-dismiss="modal"  class="fa fa-times" aria-hidden="true"></i>
                <br><br>
                <p>Available Wallet Balance: Rs <?php echo $_SESSION['user_data']['walletBalance'] ?> </p>

                <div id="desktop_view">


                    <table  class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Transaction Id</th>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Transaction Ref</th>
                            <th scope="col">Remarks</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
                        foreach ($_SESSION['user_data']['customerWalletTxn'] as $txn):
                        ?>

                        <tr>
                            <td style="width: 150px;font-size: 15px" scope="col">
                                <b>
                                    <?php
                                    echo $txn['txnId'];
                                    ?>

                                </b>

                            </td>
                            <td style="width: 150px;font-size: 15px" scope="col">
                                <?php
                                echo $txn['date'];
                                ?>
                            </td>
                            <td style="width: 100px;font-size: 15px" scope="col">
                                <?php
                                echo $txn['txnType'];
                                ?>
                            </td>
                            <td scope="col">
                                <?php
                                echo "&#8377;".$txn['amount'];
                                ?>
                            </td>
                            <td style="width: 150px;font-size: 15px" scope="col">
                                <?php
                                echo $txn['txnRef'];
                                ?>
                            </td>
                            <td style="width: 160px;font-size: 12px" scope="col">
                                <b style="text-align: justify;color: #4c4c4c">
                                <?php
                                echo $txn['remarks'];
                                ?>
                                </b>
                            </td>

                        </tr>

                            <?php
                                endforeach;
                            ?>


                        </tbody>
                    </table>
                </div>


                <div id="mobile_view">


                    <div id="card_mobile" class="card" >
                        <div class="card-body">

                            <?php
                                foreach ($_SESSION['user_data']['customerWalletTxn'] as $txn):
                                    ?>

                                
                                 <table width="100%">

                                <tr>
                                    <td id="table_title">
                                        TRANSACTION ID:
                                    </td>
                                    <td align="right">
                                        <b> <?php
                                            echo $txn['txnId'];
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="table_title">
                                        DATE:
                                    </td>
                                    <td align="right">
                                        <?php
                                        echo $txn['date'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="table_title">
                                       TRANSACTION TYPE:
                                    </td>
                                    <td align="right">
                                        <b id="content">
                                            <?php
                                            echo $txn['txnType'];
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="table_title">
                                        AMOUNT:
                                    </td>
                                    <td align="right">
                                       <b>
                                           <?php
                                           echo "&#8377;".$txn['amount'];
                                           ?>
                                       </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="table_title">
                                        TRANSACTION Ref:
                                    </td>
                                    <td align="right">

                                        <?php
                                        echo $txn['txnRef'];
                                        ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td id="table_title">
                                      REMARKS:
                                    </td>
                                    <td align="right">
                                        <?php
                                        echo $txn['remarks'];
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            
                            <hr>

                                <?php
                                endforeach;
                            ?>
                                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?
}
else{
    echo"
    <script>
     window.location.href='../';
    </script>
    ";
}
?>