# Xpub-Bitcoin
Xpub Bitcoin Receiving Addresses with SmartBit API 

https://www.smartbit.com.au/api



The address call returns a specific address with associated transactions. The base call returns the latest 10 transactions from the address.
Parameters:
/{address}
Required
The address for which you are wanting to pull information for.
Example: 1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r
/{address},{address}
Optional
The multi-address call returns a summary of a specific set of addresses. Addresses must be separated by a comma.
Range: 1-200 addresses
Example: 1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r,1BitcoinEaterAddressDontSendf59kuE
/{address},{address}/wallet
Optional Extension
The wallet flag on the address call summarises a group of addresses and returns their combined balances.
Example: 1BvvRfz4XnxSWJ524TusetYKrtZnAbgV3r,1BitcoinEaterAddressDontSendf59kuE/wallet
/{address}/op-returns
Optional Extension
Pulls any op-returns associated with the address.
/{address}/unspent
Optional Extension
Lists unspent transaction outputs associated with the address.
/{address}/multisig-unspent
Optional Extension
Lists unspent transaction outputs with a multi signature associated with the address.
limit
Optional
The number of transactions returned in the call.
Default: 10
Range: 1-1000
sort
Optional
The order in which transactions are prioritised in list.
Default: txindex
Range: txindex
dir
Optional
Sets whether list is returned from largest to smallest or vice versa.
Default: desc
Range: asc, desc
prev
Optional
Gives the cursor needed to move to the previous page.
Default: null
Range: cursor is auto-generated based on current call and parameters used, null
next
Optional
Gives the cursor needed to move to the next page.
Default: [generated]
Range: cursor is auto-generated based on current call and parameters used, null
