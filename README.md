# designED

Welcome to Readme.md of DesignED team!

> Everytime you open your project, please fetch, pull and merge everything before you start doing anything.
> git fetch origin
> git pull
> git merge main

# Creating and deleting branches

1. On GitHub main page of the repository, click the main button and click view all branches.  
   ![Main](./readme_img/1.jpg)

2. Click New branch.  
   ![New_Branch](./readme_img/2.jpg)

3. Create a new branch. **When you create a new branch** please use this name convention _**yourname**_ (You can see the example on the image below)

- Under the branch source - Select main.  
  ![Naming_Convention](./readme_img/3.jpg)

4. The branch created will show up at your branches and active branches. Click your branch (either are fine like the image below).  
   ![Branches](./readme_img/4.jpg)

5. Clone the whole Repo, and now you can work on the branch you just created.
   <br>
   <br>

# Theme installation

First, follow the document below.

[WP Local setup](https://docs.google.com/document/d/1H8_SA2pxsIRQKkaT1ilrDuTKQj0Y7lXDFyYJ7AIcQlI/edit?tab=t.0)

- Find the location where to clone the theme. This will be where we clone and work on the theme.
  ![Find 1](./readme_img/t1.jpg)
  ![Find 2](./readme_img/t2.jpg)
  ![Find 3](./readme_img/t3.jpg)
  ![Find 4](./readme_img/t4.jpg)
  ![Find 5](./readme_img/t5.jpg)
  ![Find 6](./readme_img/t6.jpg)

> After you find this location, please follow the next step.

# How to clone the repo and work on your branch

<h3> 1. Using git cli</h3>

- If using window go to search bar at the bottom of your screen, type cmd and choose Command Prompt.  
  ![Command_Prompt](./readme_img/5.jpg)
- type **cd** and find the location where you want to clone your repo (Picture below is just the example, your path should be different).  
  ![CD](./readme_img/6.jpg)

> _If you find you path and want to make a new folder, type **mkdir yourfolder name**_ <br> _to go back in directory, type **cd ..**_

- After finding the path that you want, go back to Github repo in the browser and look for HTTPS url like the image below.
  ![HTTPS](./readme_img/7.jpg)

- Then type **`git clone https://github.com/capstone-1251/designED.git`** and hit enter.  
  ![git_clone](./readme_img/8.jpg)

- After you've done with git clone, go to the git repo folder by typing **cd designed**.  
  ![cd_repo](./readme_img/9.jpg)

- Type **code .** to open visual studio code. Now you can work locally.  
  ![open_vsc](./readme_img/10.jpg)

  <h3> 2. Using Github Desktop</h3>

- First, download Github Desktop [Download](https://github.com/apps/desktop)

- Go to the main branch of repo click the **Code** button and click Open with Github Desktop.  
  ![clone_desktop](./readme_img/11.jpg)

- Choose your desired local path.

![clone_desktop](./readme_img/12.jpg)

- Click Open Visual Studio Code and you can start working on there.

![clone_vsc](./readme_img/13.jpg)

# Commit, Push and Pull request

<h3>1. Change the branch</h3>
- Open terminal in Visual Studio Code.

![open_terminal](./readme_img/14.jpg)

- type _**git switch your-branch**_ in "your-branch", change it your branch name.

![switch branch](./readme_img/c1.jpg)

- type _**git fetch origin**_ to fetch everything from main.

![switch branch](./readme_img/c2.jpg)

- type _**git merge main**_ to merge all the file with main.

![switch branch](./readme_img/c3.jpg)

> Now, you are working on your branch.

<h3>2. Commit and push using git cli</h3>

> After you've done with your portion of code, let's commit and push.

- Open terminal in Visual Studio Code.

![open_terminal](./readme_img/14.jpg)

- type _**git add .**_

![git add](./readme_img/15.jpg)

- type _**git commit -m "your comment"**_ to commit your code, in the double quotes, you can add the comment. The comment section should reflect on what you did.

![git commit](./readme_img/15-2.jpg)

- type _**git push**_ to push you code to the main branch

![git pull](./readme_img/15-3.jpg)

<h3>3. Create Pull requtest</h3>

- Go to your branch in github browser.

![pull request 1](./readme_img/16.jpg)

- Click the following area.

![pull request 2](./readme_img/17.jpg)

- Click **'Create Pull Request'**

![pull request 3](./readme_img/18.jpg)

- Click **'Create Pull Request'** again

![pull request 4](./readme_img/19.jpg)

- Click **'Merge pull request'**

![pull request 5](./readme_img/20.jpg)

- Click **'Confirm Merge'**

![pull request 3](./readme_img/21.jpg)

> After this step, please let Kris know that you already created a pull request. Kris will review the code, solve merge conflicts and delete your branch
