-- CREATE TABLE `tblusers` (
--   `id` int(11) NOT NULL,
--   `FullName` varchar(100) DEFAULT NULL,
--   `MobileNumber` char(10) DEFAULT NULL,
--   `EmailId` varchar(70) DEFAULT NULL,
--   `Password` varchar(100) DEFAULT NULL,
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Insert into 'users' ('id' primary key ,'email','name','password') values(1,'TestUser','test@gmail.com','985632147','202cb962ac59075b964b07152d234b70');

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobilenumber` char(10) NOT NULL,
  `password` varchar(255) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;