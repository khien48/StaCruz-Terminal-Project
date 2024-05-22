<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import StudentList from '@/Components/Student-for-Section/StudentList.vue';
import SectionList from '@/Components/Section/SectionList.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <v-app>
          <v-container>
            <!-- Alert Component -->
      
      
            <!-- Main Content -->
            <div class="card">
              <Splitter style="height: 620px" class="mb-5">
                <SplitterPanel class="align-items-center justify-content-center" :size="25" :minSize="10">
                  <SectionList />
                </SplitterPanel>
                <SplitterPanel class="align-items-center justify-content-center">
                  <v-main>
                 
                      <slot name="open" />
                 
                  </v-main>
                </SplitterPanel>
              </Splitter>
            </div>
          </v-container>
        </v-app>
    </AppLayout>
</template>
