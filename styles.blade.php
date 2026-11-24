<style>
    * { box-sizing: border-box; }
    body { margin: 0; background: #f4f6f8; color: #1f2937; font-family: Arial, sans-serif; }
    .container { width: min(960px, calc(100% - 32px)); margin: 40px auto; background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,.08); }
    .toolbar { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 22px; }
    h1 { margin: 0 0 22px; }
    .toolbar h1 { margin: 0; }
    label { display: block; margin-bottom: 6px; font-weight: 700; }
    .field { margin-bottom: 18px; }
    input { width: 100%; padding: 11px 12px; border: 1px solid #cbd5e1; border-radius: 7px; }
    input:focus { border-color: #2563eb; outline: 2px solid #bfdbfe; }
    .button { display: inline-block; border: 0; border-radius: 7px; padding: 10px 15px; background: #2563eb; color: #fff; cursor: pointer; text-decoration: none; }
    .button.secondary { background: #475569; }
    .button.warning { background: #d97706; }
    .button.danger { background: #dc2626; }
    .actions { display: flex; gap: 10px; margin-top: 20px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 12px; border-bottom: 1px solid #e2e8f0; text-align: left; }
    th { background: #f8fafc; }
    .avatar { width: 58px; height: 58px; border-radius: 50%; object-fit: cover; background: #e2e8f0; }
    .avatar.large { width: 120px; height: 120px; }
    .message { margin-bottom: 20px; padding: 12px 15px; border-radius: 7px; }
    .message.success { background: #dcfce7; color: #166534; }
    .message.error { background: #fee2e2; color: #991b1b; }
    .message ul { margin-bottom: 0; }
    .hint { margin-top: 6px; color: #64748b; font-size: .9rem; }
</style>
