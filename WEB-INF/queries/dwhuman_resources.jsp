<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/dwhuman_resources?user=root&password=" catalogUri="/WEB-INF/queries/dwhuman_resources.xml">

select {[Measures].[Lama Bekerja dalam Tahun],[Measures].[Lama Bekerja dalam Bulan],[Measures].[Lama Bekerja dalam HARI]} ON COLUMNS,
  {([Employee].[All Employees],[Department].[All Departments],[Department History].[All Department History],[History Pay].[All History Pays],[Time].[All Times])} ON ROWS
from [hr]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query DWHUMAN_RESOURCES using Mondrian OLAP</c:set>
