# Xpub-Bitcoin
Xpub Bitcoin Receiving Addresses with SmartBit API 

https://www.smartbit.com.au/api


## Parameters:


<div layout="column" class="ng-scope">
    <span layout-margin="">The address call returns a specific address with associated transactions. The base call returns the latest 10 transactions from the address.</span>
    <span layout-margin="" style="font-size:larger;"><strong>Parameters:</strong></span>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address}</code>
            <strong>Required</strong>
        </div>
        <div layout-margin="" layout="column" style="min-width:0px;">
            <span>The address for which you are wanting to pull information for.</span>
            <span>
                Example:
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-show="sandbox" aria-hidden="true" class="ng-hide">mrQoR4BMyZWyAZfHF4NuqRmkVtp87AqsUh</code>
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-hide="sandbox" aria-hidden="false">1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r</code>
            </span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address},{address}</code>
            <span>Optional</span>
        </div>
        <div layout-padding="" layout="column" style="min-width:0px;">
            <span>The multi-address call returns a summary of a specific set of addresses. Addresses must be separated by a comma.</span>
            <span>Range: 1-200 addresses</span>
            <span>
                Example:
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-show="sandbox" aria-hidden="true" class="ng-hide">mrQoR4BMyZWyAZfHF4NuqRmkVtp87AqsUh,mu6oUeNmEqQJ31cBrDrpDuwfQCAvwCxn6H</code>
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-hide="sandbox" aria-hidden="false">1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r,1BitcoinEaterAddressDontSendf59kuE</code>
            </span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address},{address}/wallet</code>
            <span>Optional Extension</span>
        </div>
        <div layout-padding="" layout="column" style="min-width:0px;">
            <span>The wallet flag on the address call summarises a group of addresses and returns their combined balances.</span>
            <span>
                Example:
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-show="sandbox" aria-hidden="true" class="ng-hide">mrQoR4BMyZWyAZfHF4NuqRmkVtp87AqsUh,mu6oUeNmEqQJ31cBrDrpDuwfQCAvwCxn6H/wallet</code>
                <code style="word-break:break-all; word-wrap:break-word;" data-ng-hide="sandbox" aria-hidden="false">1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r,1BitcoinEaterAddressDontSendf59kuE/wallet</code>
            </span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address}/op-returns</code>
            <span>Optional Extension</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Pulls any op-returns associated with the address.</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address}/unspent</code>
            <span>Optional Extension</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Lists unspent transaction outputs associated with the address.</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">/{address}/multisig-unspent</code>
            <span>Optional Extension</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Lists unspent transaction outputs with a multi signature associated with the address.</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">limit</code>
            <span>Optional</span>
        </div>
        <div layout-margin="" layout="column">
            <span>The number of transactions returned in the call.</span>
            <span>Default: 10</span>
            <span>Range: 1-1000</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">sort</code>
            <span>Optional</span>
        </div>
        <div layout-margin="" layout="column">
            <span>The order in which transactions are prioritised in list.</span>
            <span>Default: txindex</span>
            <span>Range: txindex</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">dir</code>
            <span>Optional</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Sets whether list is returned from largest to smallest or vice versa.</span>
            <span>Default: desc</span>
            <span>Range: asc, desc</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">prev</code>
            <span>Optional</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Gives the cursor needed to move to the previous page.</span>
            <span>Default: null</span>
            <span>Range: cursor is auto-generated based on current call and parameters used, null</span>
        </div>
    </div>
    <div layout="">
        <div layout-margin="" layout="column" flex="15" flex-sm="20" flex-gt-md="10">
            <code style="word-break:break-all;">next</code>
            <span>Optional</span>
        </div>
        <div layout-margin="" layout="column">
            <span>Gives the cursor needed to move to the next page.</span>
            <span>Default: [generated]</span>
            <span>Range: cursor is auto-generated based on current call and parameters used, null</span>
        </div>
    </div>
</div>
