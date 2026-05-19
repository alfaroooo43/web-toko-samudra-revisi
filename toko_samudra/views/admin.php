<!-- ADMIN PANEL CONTENT -->
<main class="admin-main">
    <div class="admin-container">

        <!-- Page Header -->
        <div class="admin-page-header">
            <div>
                <h1>📦 Kelola Produk</h1>
                <p>Tambah, edit, atau hapus produk sepatu di toko Anda.</p>
            </div>
            <button class="btn-add-toggle" id="toggleAddForm">+ Tambah Produk Baru</button>
        </div>

        <!-- Notifikasi Sukses -->
        <?php if (isset($success)): ?>
            <div class="admin-alert admin-alert-success">
                <?php if ($success === 'created'): ?>
                    ✅ Produk baru berhasil ditambahkan!
                <?php elseif ($success === 'updated'): ?>
                    ✅ Produk berhasil diperbarui!
                <?php elseif ($success === 'deleted'): ?>
                    ✅ Produk berhasil dihapus!
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- FORM TAMBAH PRODUK BARU -->
        <div class="admin-form-section" id="addFormSection">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h2>➕ Tambah Produk Baru</h2>
                </div>
                <form action="index.php?page=admin&action=create" method="POST" enctype="multipart/form-data" class="admin-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="create_nama">Nama Produk</label>
                            <input type="text" id="create_nama" name="nama" placeholder="Contoh: Sepatu Nike Air Max" required>
                        </div>
                        <div class="form-group">
                            <label for="create_harga">Harga</label>
                            <input type="text" id="create_harga" name="harga" placeholder="Contoh: Rp 350.000" required>
                        </div>
                        <div class="form-group">
                            <label for="create_kategori">Kategori</label>
                            <select id="create_kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Running">Running</option>
                                <option value="Casual">Casual</option>
                                <option value="Sneakers">Sneakers</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Formal">Formal</option>
                                <option value="Skate">Skate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="create_gambar">Gambar Produk</label>
                            <input type="file" id="create_gambar" name="gambar" accept="image/*" required>
                            <img class="image-preview" src="" alt="Preview">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">💾 Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- FORM EDIT PRODUK (tampil jika ada ?edit=id) -->
        <?php if (isset($editProduct)): ?>
        <div class="admin-form-section show" id="editFormSection">
            <div class="admin-card admin-card-edit">
                <div class="admin-card-header">
                    <h2>✏️ Edit Produk: <?= $editProduct->getNama() ?></h2>
                    <a href="index.php?page=admin" class="btn-close-form">✕</a>
                </div>
                <form action="index.php?page=admin&action=update" method="POST" enctype="multipart/form-data" class="admin-form">
                    <input type="hidden" name="id" value="<?= $editProduct->getId() ?>">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="edit_nama">Nama Produk</label>
                            <input type="text" id="edit_nama" name="nama" value="<?= $editProduct->getNama() ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_harga">Harga</label>
                            <input type="text" id="edit_harga" name="harga" value="<?= $editProduct->getHarga() ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_kategori">Kategori</label>
                            <select id="edit_kategori" name="kategori" required>
                                <option value="Running" <?= $editProduct->getKategori() === 'Running' ? 'selected' : '' ?>>Running</option>
                                <option value="Casual" <?= $editProduct->getKategori() === 'Casual' ? 'selected' : '' ?>>Casual</option>
                                <option value="Sneakers" <?= $editProduct->getKategori() === 'Sneakers' ? 'selected' : '' ?>>Sneakers</option>
                                <option value="Fashion" <?= $editProduct->getKategori() === 'Fashion' ? 'selected' : '' ?>>Fashion</option>
                                <option value="Formal" <?= $editProduct->getKategori() === 'Formal' ? 'selected' : '' ?>>Formal</option>
                                <option value="Skate" <?= $editProduct->getKategori() === 'Skate' ? 'selected' : '' ?>>Skate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_gambar">Gambar Produk <small>(kosongkan jika tidak ingin mengubah)</small></label>
                            <input type="file" id="edit_gambar" name="gambar" accept="image/*">
                            <img class="image-preview" src="assets/images/<?= $editProduct->getGambar() ?>" alt="Current Image" style="display:block;">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-submit btn-update">💾 Simpan Perubahan</button>
                        <a href="index.php?page=admin" class="btn-cancel">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <!-- TABEL DAFTAR PRODUK -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h2>📋 Daftar Produk</h2>
                <span class="product-count"><?= count($products) ?> Produk</span>
            </div>
            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($products as $product): ?>
                        <tr>
                            <td class="td-center"><?= $no++ ?></td>
                            <td class="td-image">
                                <img src="assets/images/<?= $product->getGambar() ?>" alt="<?= $product->getNama() ?>">
                            </td>
                            <td class="td-name"><?= $product->getNama() ?></td>
                            <td class="td-price"><?= $product->getHarga() ?></td>
                            <td>
                                <span class="category-badge cat-<?= strtolower($product->getKategori()) ?>">
                                    <?= $product->getKategori() ?>
                                </span>
                            </td>
                            <td class="td-actions">
                                <a href="index.php?page=admin&edit=<?= $product->getId() ?>" class="btn-action btn-edit" title="Edit Produk">✏️ Edit</a>
                                <a href="index.php?page=admin&action=delete&id=<?= $product->getId() ?>" class="btn-action btn-delete" title="Hapus Produk">🗑️ Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="6" class="td-empty">
                                <div class="empty-state">
                                    <span class="empty-icon">📭</span>
                                    <p>Belum ada produk. Klik <strong>"+ Tambah Produk Baru"</strong> untuk menambahkan.</p>
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
