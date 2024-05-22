<template>
    <div class="text-center pa-4">
    
        <v-dialog v-model="dialog" max-width="550" persistent>
    
            <template v-slot:activator="{ props }">
    
            <v-btn v-bind="props" style="color: #1f636f" flat icon="mdi-plus"></v-btn>
</template>

      <v-card title="Create Section">
        <v-card-text>
          <v-row dense>
            <v-col cols="12" md="6">
              <div class="Subholder">Grade Level</div>
              <v-combobox
                v-model="newSection.SectionGradeLvl"
                variant="outlined"
                clearable
                density="compact"
                :items="['1', '2', '3', '4', '5', '6']"
              ></v-combobox>
            </v-col>

            <v-col cols="12" md="6">
              <div class="Subholder">Section Name</div>
              <v-text-field
                v-model="newSection.SectionName"
                density="compact"
                placeholder="Section Name"
                variant="outlined"
              ></v-text-field>
            </v-col>

            <v-col cols="12" md="6">
              <div class="Subholder">Advisor's Name</div>
              <v-combobox
                v-model="newSection.SectionAd"
                variant="outlined"
                clearable
                density="compact"
                :items="[
                  'Reyes, Joan B.',
                  'Lee, Kim C.',
                  'Cador Shena B.',
                  'Ramon, John M.',
                  'Moreno, Isko A.',
                  'Marcos, Money C.',
                ]"
              ></v-combobox>
            </v-col>

            <v-col cols="12" md="6">
              <div class="Subholder">Room</div>
              <v-combobox
                v-model="newSection.SectionRoomNo"
                variant="outlined"
                clearable
                density="compact"
                :items="[
                  'NB 102',
                  'NB 240',
                  'AMS 43',
                  'AMS 1',
                  'JH 28',
                  'JH 62',
                ]"
              ></v-combobox>
            </v-col>
          </v-row>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            style="margin-bottom: 20px"
            text="Close"
            variant="plain"
            @click="dialog = false"
          ></v-btn>
          <v-btn
            style="margin-right: 20px; margin-bottom: 20px"
            color="teal"
            text="Save"
            variant="tonal"
            @click="saveSection"
            :loading="loading"
          ></v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    data: () => ({
        dialog: false,
        loading: false,

        newSection: {
            SectionName: "",
            SectionGradeLvl: "",
            SectionAd: "",
            SectionRoomNo: "",
        },
    }),
    methods: {
        async saveSection() {
            this.newSection.SectionName = this.newSection.SectionName.toUpperCase();
            this.loading = true;
            this.dialog = false;
            try {
                const response = await axios.post('/api/sections', this.newSection);
                this.$emit('add-section', this.newSection); // Emit the new section data
                this.$emit('projectAdded');
                this.resetForm();
            } catch (error) {
                console.error('Error saving section:', error);
            }

            this.loading = false;
        },
        resetForm() {
            this.newSection = {
                SectionName: "",
                SectionGradeLvl: "",
                SectionAd: "",
                SectionRoomNo: "",
            };
        },
    },

};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
* {
    font-family: "Poppins", sans-serif;
}

.Subholder {
    font-size: 12px;
}
</style>
