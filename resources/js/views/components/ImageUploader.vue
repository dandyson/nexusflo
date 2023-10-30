<template>


    <div class="mb-4">
        <label class="form-label">Your Avatar</label>
        <div class="mb-4">
            <img v-if="userAvatar" :src="userAvatar" class="img-avatar" alt="Avatar" />
            <img v-else class="img-avatar" :src="selectedImage" alt="Avatar" />
        </div>

        <div class="mb-4">
            <label for="one-profile-edit-avatar" class="form-label">Choose a new avatar</label>
            <input type="file" @change="onFileChange" class="form-control" :class="{ 'is-invalid': invalidFile }">
            <p class="invalid-feedback animated fadeIn" v-if="invalidFile">
                {{ invalidFileMessage }}
            </p>
        </div>
    </div>
</template>
  
<script setup>
import { ref } from 'vue';

const selectedImage = ref('/assets/media/avatars/avatar13.jpg'); // Default avatar
const emit = defineEmits();
const invalidFile = ref(false);
const invalidFileMessage = ref('');
const props = defineProps({
  userAvatar: String, // Define the userAvatar prop with the expected type
});

const onFileChange = (e) => {
    const file = e.target.files[0];

    if (file) {
        // Validation
        const allowedFormats = ['image/jpeg', 'image/jpg', 'image/png'];
        const maxSizeKB = 2048;

        if (!allowedFormats.includes(file.type)) {
            invalidFile.value = true;
            invalidFileMessage.value = 'Invalid file format. Please select a .jpeg, .jpg, or .png file.';
        } else if (file.size > maxSizeKB * 1024) {
            invalidFile.value = true;
            invalidFileMessage.value = 'File size exceeds the maximum allowed size.';
        } else {
            invalidFile.value = false;
            invalidFileMessage.value = '';
        }

        // Generate preview
        const reader = new FileReader();
        reader.onload = (e) => {
            selectedImage.value = e.target.result;

            // Emit an event to notify the parent component of the image change
            emit('imageChanged', file);
        };

        console.log(file);
        reader.readAsDataURL(file);
};
    }

    
</script>
  