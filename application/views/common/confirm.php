<!-- confirm message -->
<a id="dialogConfirm" href="#myConfirm" data-backdrop="static" data-keyboard="false" data-toggle="modal" class="btn btn-danger hide">Confirm</a>
<div id="myConfirm" class="modal hide">
    <div class="modal-header">
        <button  id="dialogCloseConfirm" data-dismiss="modal" class="close" type="button">×</button>
        <h3 id="dialogHeadConfirm"></h3>
    </div>
    <div id="dialogBodyConfirm" class="modal-body"> </div>
    <div id="dialogButtonsConfirm" class="modal-footer">
        <a id="okConfirm" data-dismiss="modal" class="btn btn-primary" href="#">OK</a>
        <a id="cancelConfirm" data-dismiss="modal" class="btn" href="#">Cancel</a>
    </div>
</div> 
<!--
<style>.tdconfirm{font-weight: bold}</style>
<a id='confirm' href="#myConfirm" data-toggle="modal" class="hide"></a>
<div id="myConfirm" class="modal hide">
    <div class="modal-header">
        <button id="closeConfirm" data-dismiss="modal" class="close" type="button">×</button>
        <h3>CONFIRM TRANSACTION</h3>
    </div>
    <div class="modal-body">
        <p>Please confirm if the details are correct</p>
        <table>
            <tr>
                <td  class='tdconfirm' width="50%">Merchant</td>
                <td id="confirmMerchant"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Transaction ID</td>
                <td id="confirmTranId"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Account Number</td>
                <td id="confirmAcctNo"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Reference Number</td>
                <td id="confirmRefNo"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Amount</td>
                <td id="confirmAmount"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Service Charge</td>
                <td id="confirmSC"></td>
            </tr>
            <tr>
                <td class='tdconfirm' >Total Amount</td>
                <td id="confirmTotal"></td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a class="btn btn-warning" href="#" id="okConfirm">Confirm <span class="icon"><i class="icon-circle-arrow-right"></i></a>
        <a data-dismiss="modal" class="btn" href="#">Cancel</a>
    </div>
</div>-->