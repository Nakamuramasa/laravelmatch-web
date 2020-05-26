<template>
    <div>
        <label for="file_photo" class="rounded-circle userProfileImg">
            <div class="userProfileImg_description">画像をアップロード</div>
            <i class="fas fa-camera fa-3x"></i>
            <input type="file" id="file_photo" name="img_name" @change="setImage"/>
        </label>

        <div class="userImgPreview">
            <img accept="image/*" :src="imageData">
            <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
        {{ countTest }}
    </div>
</template>

<script>
export default{
    data() {
        return{
            imageData: "",
            imageName: "",
            countTest: 5,
        }
    },
    methods: {
        setImage() {
            this.countTest = 1;
            const files = this.$refs.file;
            const fileImg = files.files[0];
            if (fileImg.type.startsWith("image/")) {
                this.imageData = window.URL.createObjectURL(fileImg);
                this.imageName = fileImg.name;
                this.countTest = 2;
            }
        },
    }
}
</script>
