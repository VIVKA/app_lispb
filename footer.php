<!-- Footer -->
<footer class="bg-light py-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 text-left">
                <p>198328, Санкт-Петербург, ул. Доблести, д.34</p>
                <p>Телефоны: +7(812)751-47-59, +7(812)742-51-52</p>
                <p>e-mail: lyceumspb@mail.ru</p>
            </div>
            <div class="col-md-6 text-right">
            </div>
            <div class="col-md-6 text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Политика конфиденциальности</a></li>
                </ul>
                &copy; <?php echo date('Y');?> <p>СПБ ГБНОУ "Лицей искусств "Санкт-Петербург"</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
        </script>
<script>
    Vue.component("step-navigation-step", {
        template: "#step-navigation-step-template",
        props: ["step", "currentstep"],
        computed: {
            indicatorclass() {
                return {
                    active: this.step.id == this.currentstep,
                    complete: this.currentstep > this.step.id };
            } } });
    Vue.component("step-navigation", {
        template: "#step-navigation-template",

        props: ["steps", "currentstep"] });
    Vue.component("step", {
        template: "#step-template",
        props: ["step", "stepcount", "currentstep"],
        computed: {
            active() {
                return this.step.id == this.currentstep;
            },
            firststep() {
                return this.currentstep == 1;
            },
            laststep() {
                return this.currentstep == this.stepcount;
            },
            stepWrapperClass() {
                return {
                    active: this.active };
            } },
        methods: {
            nextStep() {
                this.$emit("step-change", this.currentstep + 1);
            },
            lastStep() {
                this.$emit("step-change", this.currentstep - 1);
            } } });
    new Vue({
        el: "#app",
        data: {
            currentstep: 1,
            steps: [
                {
                    id: 1,
                    title: "Выбор программы",
                    icon_class: "fa fa-music" },
                {
                    id: 2,
                    title: "Заявление",
                    icon_class: "fa fa-building" },

                {
                    id: 3,
                    title: "Сведения о поступающем",
                    icon_class: "fa fa-child" },

                {
                    id: 4,
                    title: "Сведения о заявителе",
                    icon_class: "fa fa-male" },
                {
                    id: 5,
                    title: "Сведения о втором родителе",
                    icon_class: "fa fa-male" },

                {
                    id: 6,
                    title: "Отправка заявления",
                    icon_class: "fa fa-envelope" },
            ] },
        methods: {
            stepChanged(step) {
                this.currentstep = step;
            } } });
</script>
</body>
</html>
<?php
