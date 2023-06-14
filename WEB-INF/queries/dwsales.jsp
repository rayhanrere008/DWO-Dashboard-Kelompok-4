<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/dwsales?user=root&password=" catalogUri="/WEB-INF/queries/dwsales.xml">

select {[Measures].[Total Due]} ON COLUMNS,
  {([Sales Person].[All Sales Persons],[Sales Territory].[All Sales Territorys],[Sales Order Detail].[All Order Details],[Sales Order Header].[All Order Headers],[Credit Card].[All Credit Cards])} ON ROWS
from [sales]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query DWSALES using Mondrian OLAP</c:set>
