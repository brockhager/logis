<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 50%;
    background-color: #f1f1c1;
}
</style>
</head>
<body>
<br /><br />
<br /><br />
<center>
<br /><br />
<br /><br />
<h2>Logis Documentation Portal</h2>
<br /><br />
<h4></h4>


<h4>Version 4010</h4>

<table id="t01">
  <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Notes</th>
  </tr>
  <tr>
    <td><a href="4010/810.pdf" target="_blank">810.pdf</a></td>
    <td>Invoice</td>
    <td>The transaction set can be used to provide for customary and established business and industry practice relative to the billing for goods and services provided.</td>
  </tr>
   <tr>
    <td><a href="4010/820.pdf" target="_blank">820.pdf</a></td>
    <td>Payment Order/Remittance Advice</td>
    <td>The transaction set can be used to make a payment, send a remittance advice, or make a payment
and send a remittance advice.This transaction set can be an order to a financial institution to make a payment to a
payee. It can also be a remittance advice identifying the detail needed to perform cash application to the payee's
accounts receivable system. The remittance advice can go directly from payer to payee, through a financial
institution, or through a third party agent.</td>
  </tr>
  <tr>
    <td><a href="4010/832.pdf" target="_blank">832.pdf</a></td>
    <td>Price/Sales Catalog</td>
    <td> The transaction set can be used to provide for customary and established business and industry practice relative to
furnishing or requesting the price of goods or services in the form of a catalog</td>
  </tr>
  <tr>
    <td><a href="4010/850.pdf" target="_blank">850.pdf</a></td>
    <td>Purchase Order</td>
    <td>The transaction set can be used to provide for customary and established business and industry practice relative to the
placement of purchase orders for goods and services. This transaction set should not be used to convey purchase
order changes or purchase order acknowledgement information.</td>
  </tr>
  <tr>
    <td><a href="4010/852.pdf" target="_blank">852.pdf</a></td>
    <td>Product Activity Data</td>
    <td>The transaction set can be used by a distributor, warehouse, or retailer to advise a trading partner of inventory,
sales, and other product activity information. Product activity data enables a trading partner to plan and ship, or
propose inventory replenishment quantities, for distribution centers, warehouses or retail outlets.The receiver of the
transaction set will maintain some type of inventory/product movement records for its trading partners to enable
replenishment calculations based on data provided by the distributor, warehouse or retailer.</td>
  </tr>
  <tr>
    <td><a href="4010/855.pdf" target="_blank">855.pdf</a></td>
    <td>Purchase Order Acknowledgement</td>
    <td>The transaction set can be used to provide for customary and established business and industry
practice relative to a seller's acknowledgment of a buyer's purchase order. This transaction set can also be used as
notification of a vendor generated order. This usage advises a buyer that a vendor has or will ship merchandise as
prearranged in their partnership.</td>
  </tr>
  <tr>
    <td><a href="4010/856.pdf" target="_blank">856.pdf</a></td>
    <td>Ship Notice/Manifest</td>
    <td> The transaction set can be used to list the contents of a shipment of goods as well as additional
information relating to the shipment, such as order information, product description, physical characteristics, type of
packaging, marking, carrier information, and configuration of goods within the transportation equipment. The
transaction set enables the sender to describe the contents and configuration of a shipment in various levels of
detail and provides an ordered flexibility to convey information</td>
  </tr>
  <tr>
    <td><a href="4010/857.pdf" target="_blank">857.pdf</a></td>
    <td>Shipment and Billing Notice</td>
    <td>This transaction set provides the recipient of a shipment with data for both receipt planning and
payment generation.EDI and telecommunications technologies suggest efficiencies in the way business data is
processed. For example, the sender of a shipment may send the recipient's receiving function a Ship
Notice/Manifest (856), and the payables function an Invoice (810), even though the contents of these two documents
may be largely redundant. In certain business environments, the Shipment and Billing Notice permits the
consolidation of these two documents into one.Specifically, this transaction set is appropriate where the shipment
data, when it includes terms and item prices, can be used both to plan receipts and to generate payment. In this
environment, the exact prices for the items shipped may not be known in advance by both parties. This transaction
set is not appropriate in so-called Evaluated Receipts Settlement (ERS) environments, in which the exact prices for
the items shipped have been agreed upon by, and are known to, both parties in advance.This transaction set is not
to be used to replace the Ship Notice/Manifest (856) or Invoice (810) individually, but only to replace both, together.
For example, do not use this transaction set in place of a Ship Notice/Manifest while continuing to send either paper
or electronic invoice</td>
  </tr>
  <tr>
    <td><a href="4010/857Return.pdf" target="_blank">857Return.pdf</a></td>
    <td>Shipment and Billing Notice - Return</td>
    <td> This transaction set provides the recipient of a shipment with data for both receipt planning and
payment generation.EDI and telecommunications technologies suggest efficiencies in the way business data is
processed. For example, the sender of a shipment may send the recipient's receiving function a Ship
Notice/Manifest (856), and the payables function an Invoice (810), even though the contents of these two documents
may be largely redundant. In certain business environments, the Shipment and Billing Notice permits the
consolidation of these two documents into one.Specifically, this transaction set is appropriate where the shipment
data, when it includes terms and item prices, can be used both to plan receipts and to generate payment. In this
environment, the exact prices for the items shipped may not be known in advance by both parties. This transaction
set is not appropriate in so-called Evaluated Receipts Settlement (ERS) environments, in which the exact prices for
the items shipped have been agreed upon by, and are known to, both parties in advance.This transaction set is not
to be used to replace the Ship Notice/Manifest (856) or Invoice (810) individually, but only to replace both, together.
For example, do not use this transaction set in place of a Ship Notice/Manifest while continuing to send either paper
or electronic invoice</td>
  </tr>
  <tr>
    <td><a href="4010/885.pdf" target="_blank">885.pdf</a></td>
    <td>Retail Account Characteristics</td>
    <td>This transaction set is used to enable a retailer, wholesaler or broker to provide detailed attributes of a
retail store such as store number, size of store, class of trade, product category information, customer demographic
information, or marketing, etc. to a trading partner.</td>
  </tr>
  <tr>
    <td><a href="4010/997.pdf" target="_blank">997.pdf</a></td>
    <td>Functional Acknowledgement</td>
    <td> The transaction set can be used to define the control structures for a set of acknowledgments to
indicate the results of the syntactical analysis of the electronically encoded documents. The encoded documents are
the transaction sets, which are grouped in functional groups, used in defining transactions for business data
interchange. This standard does not cover the semantic meaning of the information encoded in the transaction sets.</td>
  </tr>
</table>
<br>


<h4>Version 5030</h4>

<table id="t01">
  <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Notes</th>
  </tr>
  <tr>
    <td><a href="5030/204.pdf" target="_blank">204.pdf</a></td>
    <td>Motor Carrier Load Tender </td>
    <td>This transaction set can be used to allow shippers or other interested parties to offer (tender) a shipment to a full load
(truckload) motor carrier including detailed scheduling, equipment requirements, commodities, and shipping
instructions pertinent to a load tender. It is not to be used to provide a motor carrier with data relative to a
Less-than-Truckload bill of lading, pickup notification, or manifest.</td>
  </tr>
  <tr>
    <td><a href="5030/211.pdf" target="_blank">211.pdf</a></td>
    <td>Motor Carrier Bill of Lading</td>
    <td>This transaction set can be used to allow shippers or other parties, responsible for contracting with a motor carrier, to
provide a legal bill of lading for a shipment. It is not to be used to provide a motor carrier with data relative to a load
tender, pick-up manifest, or appointment scheduling</td>
  </tr>
  <tr>
    <td><a href="5030/214.pdf" target="_blank">214.pdf</a></td>
    <td>Transportation Carrier Shipment Status Message</td>
    <td> This transaction set can be used by a transportation carrier to provide shippers, consignees, and
their agents with the status of shipments in terms of dates, times, locations, route, identifying numbers, and
conveyance.</td>
  </tr>
  <tr>
    <td><a href="5030/810.pdf" target="_blank">810.pdf</a></td>
    <td>Invoice</td>
    <td>The transaction set can be used to provide for customary and established business and 
	industry practice relative to the billing for goods and
services provided</td>
  </tr>
  <tr>
    <td><a href="5030/812.pdf" target="_blank">812.pdf</a></td>
    <td>Credit/Debit Adjustment</td>
    <td>The transaction set can be used to notify a trading partner of an adjustment or bill-back and may be used to request
an adjustment or bill-back. It identifies and contains the details and amounts covering exceptions, adjustments,
credits, or debits for goods or services. This transaction set is multi-directional between trading partners.</td>
  </tr>
  <tr>
    <td><a href="5030/820.pdf" target="_blank">820.pdf</a></td>
    <td>Payment Order/Remittance Advice</td>
    <td>The transaction set can be used to make a payment, send a remittance advice, or make a payment and
send a remittance advice. This transaction set can be an order to a financial institution to make a payment to a
payee. It can also be a remittance advice identifying the detail needed to perform cash application to the payee's
accounts receivable system. The remittance advice can go directly from payer to payee, through a financial
institution, or through a third party agent</td>
  </tr>
  <tr>
    <td><a href="5030/850.pdf" target="_blank">850.pdf</a></td>
    <td>Purchase Order</td>
    <td>The transaction set can be used to provide for customary and established business and industry practice relative to the
placement of purchase orders for goods and services. This transaction set should not be used to convey purchase
order changes or purchase order acknowledgement information.</td>
  </tr>
  <tr>
    <td><a href="5030/855.pdf" target="_blank">855.pdf</a></td>
    <td>Purchase Order Acknowledgement</td>
    <td>The transaction set can be used to provide for customary and established business and industry
practice relative to a seller's acknowledgement of a buyer's purchase order. This transaction set can also be used as
notification of a vendor generated order. This usage advises a buyer that a vendor has or will ship merchandise as
prearranged in their partnership</td>
  </tr>
  <tr>
    <td><a href="5030/856.pdf" target="_blank">856.pdf</a></td>
    <td>Ship Notice/Manifest</td>
    <td>The transaction set can be used to list the contents of a shipment of goods as well as additional information relating
to the shipment, such as order information, product description, physical characteristics, type of packaging, marking,
carrier information, and configuration of goods within the transportation equipment. The transaction set enables the
sender to describe the contents and configuration of a shipment in various levels of detail and provides an ordered
flexibility to convey information. The sender of this transaction is the organization responsible for detailing and
communicating the contents of a shipment, or shipments, to one or more receivers of the transaction set. The
receiver of this transaction set can be any organization having an interest in the contents of a shipment or information
about the contents of a shipment. </td>
  </tr>
  <tr>
    <td><a href="5030/940.pdf" target="_blank">940.pdf</a></td>
    <td>Warehouse Shipping Order </td>
    <td>This transaction set can be used to enable the depositor to advise a warehouse to make a shipment, confirm a
shipment, or modify or cancel a previously transmitted shipping order.
The Warehouse Shipping Order (940) is a business message used by the seller to authorize the public warehouse to
make a shipment to a buyer. It specifies what products to ship and the quantity of each. Using this message, the
seller can advise the warehouse of an original, confirmation, change, replacement or cancellation of an shipment.</td>
  </tr>
  <tr>
    <td><a href="5030/945.pdf" target="_blank">945.pdf</a></td>
    <td>Warehouse Shipping Advice </td>
    <td> The transaction set can be used by the warehouse to advise the depositor that shipment was made. It
is used to reconcile order quantities with shipment quantities</td>
  </tr> 
</table>


<br /><br />
<br /><br />
<h4><a href="http://www.logisedi.com/info/">Go to the Information Portal</a></h4>
<br /><br />
<h4><a href="http://www.logisedi.com/gateway/site/">Go to the Gateway Site</a></h4>
</center>
<br /><br />
<br /><br /><br /><br />
<br /><br />
</body>
</html>
