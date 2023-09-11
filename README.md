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
- Param Name
    + controller: Qui định gọi vào controller nào. Name phải trùng tên với Controller Name
    Ex: ProductController -> Param controller: product
    + action: Qui định gọi vào method nào. Trường hợp không có -> mặc định action là index
- Route: Từ sau dấu ? sẽ có tên là route
# Phân quyền người dùng