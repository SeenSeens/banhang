# Project PHP 2
# Quy tắc đặt tên
- Controller
    + Tên class & tên file luôn phải giống nhau
    + Tên class luôn có "Controller" ở cuối cùng
    Ex: ProductController (Class name) -> ProductController.php (File name)
- Models
    + Giống Controller nhưng khác ở tên cố định là Model
    Ex: ProductModel (Class name) -> ProductModel.php (File name)
- View (Không bắt buộc nhưng nên)
    + Tên của File View nên giống với tên method trong file view đó
    Ex: Method trong controller là index -> tên file view sẽ là index.php
    + Tên thư mục View nên giống với controller nhưng ở dạng số nhiều
    Ex: ProductController -> Folder view là products