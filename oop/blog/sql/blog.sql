-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 03:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_icon` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`, `cat_icon`, `cat_created_at`) VALUES
(1, 'laravel', 'fab fa-laravel', '2021-08-01 15:41:18'),
(2, 'developers', 'fas fa-code', '2021-08-01 16:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `author_id` int(10) NOT NULL,
  `catagory_id` int(10) NOT NULL,
  `post_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_thumbnail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `author_id`, `catagory_id`, `post_title`, `post_body`, `post_thumbnail`, `post_created_at`) VALUES
(1, 1, 1, 'Glossary of Humanity up', '<p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Supervised learning has been at the forefront of research in computer vision and deep learning over the past decade.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">In a supervised learning setting, humans are required to annotate a large amount of dataset manually. Then, models use this data to learn complex underlying relationships between the data and label and develop the capability to predict the label, given the data. Deep learning models are generally data-hungry and require enormous amounts of datasets to achieve good performance. Ever-improving hardware and the availability of large human-labeled datasets has been the reason for the recent successes of deep learning.</p><div class=\"spcl_line mar_b30\" style=\"margin: 0px 0px 30px; padding: 20px 45px 20px 85px; background: rgb(247, 247, 247); position: relative; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\"><p class=\"spcl_line_p\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; line-height: 26px; font-size: 16px; color: rgb(0, 0, 0);\">If you think of gaining a new skill only as a means to a very specific end (i.e., getting promoted), your first step should be to adjust your mindset. You need to embrace continuous learning as an integral part of your professional development—today and for the rest of your career.</p></div><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">One major drawback of supervised deep learning is that it relies on the presence of an extensive amount of human-labeled datasets for training. This luxury is not available across all domains as it might be logistically difficult and very expensive to get huge datasets annotated by professionals. While the acquisition of labeled data can be a challenging and costly endeavor, we usually have access to large amounts of unlabeled datasets, especially image and text data. Therefore, we need to find a way to tap into these underused datasets and use them for learning.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Transfer Learning from <a href=\"http://google.com\" target=\"_blank\">Pretrained</a> Models</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Transfer learning means using knowledge from a similar task to solve a problem at hand. In practice, it usually means using as initializations the deep neural network weights learned from a similar task, rather than starting from a random initialization of the weights, and then further training the model on the available labeled data to solve the task at hand.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Transfer learning enables us to train models on datasets as small as a few thousand examples, and it can deliver a very good performance. Transfer learning from pretrained models can be performed in three ways:</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">1. Feature Extraction</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Usually, the last layers of the neural network are doing the most abstract and task-specific calculations, which are generally not easily transferable to other tasks. By contrast, the initial layers of the network learn some basic features like edges and common shapes, which are easily transferable across tasks.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">The image sets below depict what the convolution kernels at different levels in a convolutional neural network (CNN) are essentially learning. We see a hierarchical representation, with the initial layers learning basic shapes, and progressively, higher layers learning more complex semantic concepts.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">2. Fine-tuning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Alternatively, we can transfer the layers from a pretrained network and train the entire network on the available labeled data. This setup needs a little more labeled data because you are training the entire network and hence a large number of parameters. This setup is more prone to overfitting when there is a scarcity of data.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">3. Two-stage Transfer Learning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">This approach is my personal favorite and usually yields the best results, at least in my experience. Here, we train the newly attached layers while freezing the transferred layers for a few epochs before fine-tuning the entire network.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">The Need for Semi-supervised and Unsupervised Methods</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Experiment</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">In this section, I will relate an experiment that empirically establishes the potential of unsupervised pre-training for image classification. This was my semester project for a Deep Learning class I took with Yann LeCun at NYU last spring.</p><ul class=\"blog_post_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style: none; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\"><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.</li></ul>', '6107b7cbeab9f5.30565558.png', '2021-08-02 15:15:56'),
(2, 1, 2, 'Breaking News', '<p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Supervised learning has been at the forefront of research in computer vision and deep learning over the past decade.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">In a supervised learning setting, humans are required to annotate a large amount of dataset manually. Then, models use this data to learn complex underlying relationships between the data and label and develop the capability to predict the label, given the data. Deep learning models are generally data-hungry and require enormous amounts of datasets to achieve good performance. Ever-improving hardware and the availability of large human-labeled datasets has been the reason for the recent successes of deep learning.</p><div class=\"spcl_line mar_b30\" style=\"margin: 0px 0px 30px; padding: 20px 45px 20px 85px; background: rgb(247, 247, 247); position: relative; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\"><p class=\"spcl_line_p\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; line-height: 26px; font-size: 16px; color: rgb(0, 0, 0);\">If you think of gaining a new skill only as a means to a very specific end (i.e., getting promoted), your first step should be to adjust your mindset. You need to embrace continuous learning as an integral part of your professional development—today and for the rest of your career.</p></div><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">One major drawback of supervised deep learning is that it relies on the presence of an extensive amount of human-labeled datasets for training. This luxury is not available across all domains as it might be logistically difficult and very expensive to get huge datasets annotated by professionals. While the acquisition of labeled data can be a challenging and costly endeavor, we usually have access to large amounts of unlabeled datasets, especially image and text data. Therefore, we need to find a way to tap into these underused datasets and use them for learning.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Transfer Learning from Pretrained Models</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Transfer learning means using knowledge from a similar task to solve a problem at hand. In practice, it usually means using as initializations the deep neural network weights learned from a similar task, rather than starting from a random initialization of the weights, and then further training the model on the available labeled data to solve the task at hand.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Transfer learning enables us to train models on datasets as small as a few thousand examples, and it can deliver a very good performance. Transfer learning from pretrained models can be performed in three ways:</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">1. Feature Extraction</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Usually, the last layers of the neural network are doing the most abstract and task-specific calculations, which are generally not easily transferable to other tasks. By contrast, the initial layers of the network learn some basic features like edges and common shapes, which are easily transferable across tasks.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">The image sets below depict what the convolution kernels at different levels in a convolutional neural network (CNN) are essentially learning. We see a hierarchical representation, with the initial layers learning basic shapes, and progressively, higher layers learning more complex semantic concepts.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">2. Fine-tuning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">Alternatively, we can transfer the layers from a pretrained network and train the entire network on the available labeled data. This setup needs a little more labeled data because you are training the entire network and hence a large number of parameters. This setup is more prone to overfitting when there is a scarcity of data.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">3. Two-stage Transfer Learning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">This approach is my personal favorite and usually yields the best results, at least in my experience. Here, we train the newly attached layers while freezing the transferred layers for a few epochs before fine-tuning the entire network.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">The Need for Semi-supervised and Unsupervised Methods</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Experiment</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: &quot;Open Sans&quot;, sans-serif;\">In this section, I will relate an experiment that empirically establishes the potential of unsupervised pre-training for image classification. This was my semester project for a Deep Learning class I took with Yann LeCun at NYU last spring.</p><ul class=\"blog_post_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style: none; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\"><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.</li></ul>', '6107c2be265f41.11679882.png', '2021-08-02 16:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_about`, `user_photo`, `created_at`) VALUES
(1, 'Md Ashanur Rahman', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'lorem ipsum dami text', '6106e1f489b361.78976248.jpg', '2021-07-26 15:43:34'),
(3, 'jisan', 'jisan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '2021-07-26 15:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
