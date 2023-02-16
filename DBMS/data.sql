CREATE DATABASE  db_contact ;
USE db_contact;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS tbl_contact;
CREATE TABLE tbl_contact (
  cname varchar2(50) NOT NULL,
  cphone varchar2(10) NOT NULL,
  ctype varchar2(20) NOT NULL,
  ccombo varchar2(15) NOT NULL,
  corders text NOT NULL,
  ccoments text
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE tbl_contact ADD PRIMARY KEY (cphone);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
--ALTER TABLE tbl_contact MODIFY id int(11) NOT NULL AUTO_INCREMENT;