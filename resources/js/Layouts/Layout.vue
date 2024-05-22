<template>
    <v-card>
      <v-layout>
        <v-navigation-drawer  location="left" permanent>
          <template v-slot:prepend>
            <v-img class="logo" height="150" src="@/assets/logoschool.png" />
          </template>
  
          <v-list dense nav color="teal" grow>
            <v-subheader class="label">Main Menu</v-subheader>
  
            <div class="menus">
  
          
                <v-list-item
                  prepend-icon="mdi-view-dashboard"
                  title="Dashboard"
                  value="dashboard"
                  router to ="/"
                ></v-list-item>
  
  
              <v-list-item
                prepend-icon="mdi-account-group-outline"
                title="Faculty and Staff List"
                value="Faculty-and-Staff-List"
                router to ="/test" 
              ></v-list-item>
  
                <v-list-item
                prepend-icon="mdi-account"
                title="Student List"
                value="student-List"
                router to="/AllStudent">
              </v-list-item>

           
            
  
              <v-list-item
                prepend-icon="mdi-format-list-bulleted"
                title="Section List"
                value="sectionList"
                router to ="/SplitterPage" 
  
              ></v-list-item>
  
    
  
              <v-list-item
                prepend-icon="mdi-calendar-blank"
                title="Class Schedules"
                value="classSchedules"
                router to ="/class" 
              ></v-list-item>
            </div>
  
            <v-subheader class="label">Account</v-subheader>
  
            <div class="menus">
              <v-list-item
                prepend-icon="mdi-cog"
                title="Settings"
                value="settings"
              ></v-list-item>
  
              <v-list-item
                prepend-icon="mdi-lock"
                title="Privacy"
                value="privacy"
              ></v-list-item>
  
              <v-list-item
                prepend-icon="mdi-flag"
                title="Report Problem"
                value="report-problem"
              ></v-list-item>
  
              <v-list-item
                class="logout-botton"
                prepend-icon="mdi-logout"
                title="Logout"
                value="logout"
              ></v-list-item>
            </div>
          </v-list>
        </v-navigation-drawer>
  
        <v-main  style="height: 900px"></v-main>
      </v-layout>
    </v-card>
  </template>
  
  <script>
  
  </script>
  
  
    <style scoped >
  /* Existing styles */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
  
  * {
    font-family: "Poppins", sans-serif;
    font-weight: bold; /* Make the text bold */
  }
  
  .logo {
    margin-top: 20px;
    margin-bottom: 20px;
  }
  
  ::-webkit-scrollbar {
     display: none;
  }
  
  .label {
    font-size: 12px;
  }
  
  .logout-botton {
    margin-top: 30px;
  }
  .menus {
    margin-left: 20px;
    margin-top: 10px;
  }
  </style>
  