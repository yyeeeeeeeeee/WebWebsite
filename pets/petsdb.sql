CREATE DATABASE pawsomeadoptdb CHARACTER SET utf32 COLLATE utf32_general_ci;
USE pawsomeadoptdb

CREATE TABLE adoptlist (
    petsid INT AUTO_INCREMENT PRIMARY KEY,
    pets VARCHAR(50) NOT NULL,
    age INT,
    breed VARCHAR(50),
	gender VARCHAR(10),
    weight DECIMAL(5,2),
    size VARCHAR(20),
    intake_date DATE,
    special_needs TEXT,
    vaccine_status VARCHAR(50),
    color VARCHAR(50),
    description TEXT,
	img VARCHAR(255)
);


INSERT INTO adoptlist (pets, age, breed, gender, weight, size, intake_date, special_needs, vaccine_status, color, description, image_url) VALUES
('Buddy', 3, 'Golden Retriever', 'Male', 30.5, 'Large', '2024-04-14', 'None', 'Up to date', 'Golden', 'Friendly and playful dog, loves outdoor activities.', 'https://www.bobocw.com/uploads/202207/18/220718121305677.jpeg'),
('Fluffy', 2, 'Persian', 'Female', 8.2, 'Medium', '2024-04-12', 'Requires grooming', 'Partially vaccinated', 'White', 'Affectionate and calm cat, enjoys lounging around.', 'https://cdn.onemars.net/sites/whiskas_my_rRNUA_mwh5/image/cat-breeds-22_1920x670_1651757644778.jpeg'),
('Link', 4, 'Border Collie', 'Male', 65.0, 'Large', '2024-04-10', 'Hip dysplasia', 'Fully vaccinated', 'Black and Tan', 'Active and protective dog, needs experienced owner.', 'https://sunny1835922.github.io/images/%E8%BE%B9%E7%89%A72.jpg'),
('Luna', 1, 'Siamese', 'Female', 6.0, 'Small', '2024-04-08', 'None', 'Up to date', 'Seal point', 'Playful and vocal cat, bonds strongly with owner.', 'https://www.meowingtons.com/cdn/shop/articles/Screen_Shot_2021-01-06_at_3.43.10_PM.png'),
('Charlie', 5, 'Labrador Retriever', 'Male', 27.8, 'Large', '2024-04-16', 'None', 'Up to date', 'Chocolate', 'Friendly and outgoing dog, loves to fetch and swim.', 'https://www.vidavetcare.com/wp-content/uploads/sites/234/2022/04/labrador-retriever-dog-breed-info.jpeg'),
('Milo', 1, 'Maine Coon', 'Male', 12.5, 'Large', '2024-04-15', 'None', 'Partially vaccinated', 'Tabby', 'Gentle and affectionate cat, enjoys cuddling.', 'https://conservationcubclub.com/wp-content/uploads/2023/12/Maine-Coon-Cat-Hero.jpeg'),
('Bella', 6, 'Dachshund', 'Female', 14.3, 'Small', '2024-04-14', 'Back problems', 'Up to date', 'Red', 'Loyal and energetic dog, great for apartment living.', 'https://dogtime.com/wp-content/uploads/sites/12/2011/01/GettyImages-700141990-e1688418771301.jpg?w=1024'),
('Simba', 3, 'Bengal', 'Male', 10.0, 'Medium', '2024-04-12', 'None', 'Fully vaccinated', 'Marbled', 'Active and playful cat, loves interactive toys.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtwIMPUeObrKwF9w1o-m0nz94gjnzyDsQJ4keC_z41cg&s'),
('Rocky', 2, 'Boxer', 'Male', 60.0, 'Large', '2024-04-10', 'None', 'Up to date', 'Fawn', 'Loyal and affectionate dog, enjoys outdoor adventures.', 'https://media-be.chewy.com/wp-content/uploads/2021/04/18143927/iStock-1453345538-616x615.jpg'),
('Cola', 2, 'Corgi', 'Male', 22.1, 'Medium', '2024-03-23', 'None', 'Fully vaccinated', 'Tricolor', 'Playful and loyal dog, great for active families.', 'https://www.purina.com.my/sites/default/files/styles/ttt_image_510/public/2021-01/Welsh%20Corgi%20%28Pembroke%291.jpg?itok=-ALFB8xn'),
('Lola', 4, 'Ragdoll', 'Female', 9.8, 'Medium', '2024-04-08', 'Requires grooming', 'Partially vaccinated', 'Blue point', 'Calm and gentle cat, gets along well with children and other pets.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR97K-MdlSm8PWrjwDRMSUUlHpNvi5EdChKIYCJYqahZg&s'),
('Cooper', 1, 'Cavalier King Charles Spaniel', 'Male', 15.5, 'Small', '2024-04-07', 'Heart murmur', 'Partially vaccinated', 'Blenheim', 'Sweet and affectionate dog, loves to cuddle.', 'https://www.akc.org/wp-content/uploads/2021/01/Cavalier-King-Charles-Spaniel-puppy-sitting-in-the-grass.jpeg'),
('Lucky', 8, 'Shih Tzu', 'Female', 10.0, 'Small', '2024-04-05', 'Blind in one eye', 'Up to date', 'White and brown', 'Gentle and loyal dog, enjoys leisurely walks.', 'https://cdn.britannica.com/03/234203-050-C3D47B4B/Shih-tzu-dog.jpg'),
('Oliver', 2, 'Siberian', 'Male', 13.7, 'Medium', '2024-04-04', 'None', 'Fully vaccinated', 'Silver tabby', 'Curious and playful cat, enjoys exploring.', 'https://image.petmd.com/files/styles/863x625/public/2023-05/siberian-cat.jpg'),
('Oreo', 1, 'Domestic Shorthair', 'Male', 8.0, 'Small', '2024-03-31', 'None', 'Up to date', 'Black and white', 'Playful and mischievous cat, loves chasing toys.', 'https://qph.cf2.quoracdn.net/main-qimg-ac7ec1a0aed7215b64d9a992341318f5-lq');

