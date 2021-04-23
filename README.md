# 2B-ModernWorkspace
![Projects](https://user-images.githubusercontent.com/41269745/115910456-23909300-a46d-11eb-97a0-1df7472018d4.png)

## Team

42

### Team members

- Breznický Timotej, SPŠE-PO
- Mazúr Matej, SPŠE-PO
- Poľanský Marko, SPŠE-PO

## Description

Our project is solution for companies that works at Hybrid office system. We tried on examples of big companies make a sollution that will enahnce Hybrid office.

Our project consist of 3 parts, about which you can read more:  
[Canban](https://github.com/42-HackKosice/2B-ModernWorkspace/blob/main/Canban/ReadMe.md)  
[Calendar](https://github.com/42-HackKosice/2B-ModernWorkspace/blob/main/Calendar/README.md)  
[Order meal](https://github.com/42-HackKosice/1B-OrderMealApp/blob/main/README.md)

We made a soultion that uses one database to accesss the data (except the canban, because of Authentication itegrity issue). Our decision was to separate each part into separate project to reduce the network traffic. Because the Canban will be most used per day and the calendar and order meal few times a day.

### Canban

In canban you track your work that you need to end. 
Also if you have a problem you can ask for help or if you end all your task you can take optional tasks for bonus money at your salary. SuperUser can add items and also assign people to groups.

![](https://user-images.githubusercontent.com/41269745/115905084-e379e200-a465-11eb-9b35-44f1d03fe6b0.png)

### Calendar

In calendar we set a specific number of 5. This number means how many users/employees can sign for days in month when they want to go physically to work. In this calendar you can also see on which date are company meetings when all people need to be there.

![]()

### Order meal

We used our project from first challenge and added it as a part of our ecosystem. Here you can order meal for today and also who is ordering food can see the list of all orders. Also you can see history of your order so on base of that you can decide what you can order next time.

![]()

# Video presentation

Presentation and features of prototype are shown in this video(image/link):
[![Video Title](https://user-images.githubusercontent.com/41269745/115922605-68242a80-a47d-11eb-8538-6be0f99270c7.png)](https://youtu.be/064sRkHrSnY)  

# How to try?

Logins for all sites are:  
Mail: matejmazur@outlook.com  
Password: Passw0rd.+  

>Canban: [https://canban.azurewebsites.net/](https://canban.azurewebsites.net/)

>Calendar: [https://aworkcalendar.azurewebsites.net/](https://aworkcalendar.azurewebsites.net/)

>Order meal: [https://ordermeal.azurewebsites.net/](https://ordermeal.azurewebsites.net/)

# Challenges and accomplishments

Biggest challenge was to think of something that would be useful. Also we firstly tried to make "APIs" for our websites to short the work of user from GET and than POST on only POST. 

Biggest problem for us is that each of us know another type of coding technology and all the Frameworks use different Identity storing. We want to look at it and maybe find a way how to connect Laravel and ASP.NET and how to use one Identity storage for both.

# Next Steps
* [ ] Fill the web with real Data (Users, Tasks, Groups, Buckets, Dates)
>#### Possible Upgrades:
>* [ ] Connect the Identity storage for only one
>* [ ] Add more game-ish features like xp and levels
>* [ ] Rework the Canban Board to have drag & drop and also to make it automatically update without reloading site
>* [ ] Time picker for users e.g. how many hours they will work in the office 

## License

[MIT License](https://github.com/42-HackKosice/2B-ModernWorkspace/blob/main/LICENSE)
